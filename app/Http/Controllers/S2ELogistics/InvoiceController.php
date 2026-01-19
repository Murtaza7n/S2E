<?php

namespace App\Http\Controllers\S2ELogistics;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\ConsignmentNote;
use App\Models\Party;
use App\Models\CargoOffice;
use App\Models\InvoiceCharge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $query = Invoice::with(['party', 'cargoOffice']);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('party_id')) {
            $query->where('party_id', $request->party_id);
        }

        if ($request->filled('date_from')) {
            $query->where('invoice_date', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->where('invoice_date', '<=', $request->date_to);
        }

        $invoices = $query->latest()->paginate(50);
        $parties = Party::where('is_active', true)->get();

        return view('s2e-logistics.invoices.index', compact('invoices', 'parties'));
    }

    public function create()
    {
        $parties = Party::where('is_active', true)->get();
        $offices = CargoOffice::where('is_active', true)->get();
        $invoiceCharges = InvoiceCharge::where('is_active', true)->get();
        $availableCns = ConsignmentNote::where('status', 'delivered')
            ->where('is_invoiced', false)
            ->with(['party', 'destinationCity'])
            ->get()
            ->groupBy('party_id');

        return view('s2e-logistics.invoices.create', compact('parties', 'offices', 'invoiceCharges', 'availableCns'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'invoice_date' => 'required|date',
            'party_id' => 'required|exists:parties,id',
            'cargo_office_id' => 'required|exists:cargo_offices,id',
            'cn_ids' => 'required|array|min:1',
            'cn_ids.*' => 'exists:consignment_notes,id',
            'invoice_charge_ids' => 'nullable|array',
            'invoice_charge_amounts' => 'nullable|array',
        ]);

        DB::beginTransaction();
        try {
            $cns = ConsignmentNote::whereIn('id', $validated['cn_ids'])
                ->where('party_id', $validated['party_id'])
                ->where('is_invoiced', false)
                ->get();

            if ($cns->count() !== count($validated['cn_ids'])) {
                throw new \Exception('Some CNs are not available for invoicing.');
            }

            $subtotal = $cns->sum('freight');
            $totalFuel = $cns->sum('fuel_charge');
            $totalOtherCharges = $cns->sum('other_charges');
            $totalCharges = 0;

            // Calculate invoice charges
            if ($request->filled('invoice_charge_ids')) {
                foreach ($request->invoice_charge_ids as $index => $chargeId) {
                    $charge = InvoiceCharge::find($chargeId);
                    if ($charge) {
                        $amount = $request->invoice_charge_amounts[$index] ?? 0;
                        $totalCharges += $amount;
                    }
                }
            }

            $totalAmount = $subtotal + $totalFuel + $totalOtherCharges + $totalCharges;
            $taxAmount = 0; // Calculate tax if needed
            $grandTotal = $totalAmount + $taxAmount;

            $invoice = Invoice::create([
                'invoice_number' => $this->generateInvoiceNumber(),
                'invoice_date' => $validated['invoice_date'],
                'party_id' => $validated['party_id'],
                'cargo_office_id' => $validated['cargo_office_id'],
                'total_cns' => $cns->count(),
                'subtotal' => $subtotal,
                'total_charges' => $totalCharges,
                'total_fuel' => $totalFuel,
                'total_amount' => $totalAmount,
                'tax_amount' => $taxAmount,
                'grand_total' => $grandTotal,
                'status' => 'draft',
                'created_by' => auth()->id(),
            ]);

            // Create invoice items
            foreach ($cns as $cn) {
                $invoice->items()->create([
                    'cn_id' => $cn->id,
                    'freight' => $cn->freight,
                    'fuel_charge' => $cn->fuel_charge,
                    'other_charges' => $cn->other_charges,
                    'total' => $cn->freight + $cn->fuel_charge + $cn->other_charges,
                ]);

                $cn->update([
                    'is_invoiced' => true,
                    'invoice_id' => $invoice->id,
                ]);
            }

            // Create invoice charge items
            if ($request->filled('invoice_charge_ids')) {
                foreach ($request->invoice_charge_ids as $index => $chargeId) {
                    $amount = $request->invoice_charge_amounts[$index] ?? 0;
                    if ($amount > 0) {
                        $invoice->chargeItems()->create([
                            'invoice_charge_id' => $chargeId,
                            'amount' => $amount,
                        ]);
                    }
                }
            }

            DB::commit();

            // TODO: Create finance entries automatically
            $this->createFinanceEntries($invoice);

            return redirect()->route('s2e.invoices.show', $invoice)
                ->with('success', 'Invoice created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Error creating invoice: ' . $e->getMessage());
        }
    }

    public function show(Invoice $invoice)
    {
        $invoice->load(['party', 'cargoOffice', 'items.consignmentNote', 'chargeItems.invoiceCharge']);
        return view('s2e-logistics.invoices.show', compact('invoice'));
    }

    public function post(Invoice $invoice)
    {
        if ($invoice->status !== 'draft') {
            return back()->with('error', 'Only draft invoices can be posted.');
        }

        DB::beginTransaction();
        try {
            $invoice->update(['status' => 'posted']);

            // Update party ledger
            $this->updatePartyLedger($invoice);

            DB::commit();

            return back()->with('success', 'Invoice posted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error posting invoice: ' . $e->getMessage());
        }
    }

    private function generateInvoiceNumber()
    {
        $year = date('Y');
        $lastInvoice = Invoice::whereYear('invoice_date', $year)
            ->orderBy('invoice_number', 'desc')
            ->first();

        if ($lastInvoice) {
            $lastNumber = (int) substr($lastInvoice->invoice_number, -4);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        return 'INV-' . $year . '-' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
    }

    private function createFinanceEntries(Invoice $invoice)
    {
        // This will be implemented in Finance module
        // Creates voucher entries for invoice
    }

    private function updatePartyLedger(Invoice $invoice)
    {
        // Update party ledger with invoice amount
        \App\Models\PartyLedger::create([
            'party_id' => $invoice->party_id,
            'transaction_date' => $invoice->invoice_date,
            'reference_type' => Invoice::class,
            'reference_id' => $invoice->id,
            'description' => 'Invoice: ' . $invoice->invoice_number,
            'debit' => $invoice->grand_total,
            'credit' => 0,
            'balance' => $this->calculatePartyBalance($invoice->party_id) + $invoice->grand_total,
        ]);
    }

    private function calculatePartyBalance($partyId)
    {
        $lastEntry = \App\Models\PartyLedger::where('party_id', $partyId)
            ->orderBy('transaction_date', 'desc')
            ->orderBy('id', 'desc')
            ->first();

        return $lastEntry ? $lastEntry->balance : 0;
    }
}

