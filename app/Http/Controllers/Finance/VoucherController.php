<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use App\Models\ChartOfAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoucherController extends Controller
{
    public function index(Request $request)
    {
        $query = Voucher::with(['creator']);

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $vouchers = $query->latest()->paginate(50);
        return view('finance.vouchers.index', compact('vouchers'));
    }

    public function create()
    {
        $accounts = ChartOfAccount::where('is_active', true)->get();
        return view('finance.vouchers.create', compact('accounts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'voucher_date' => 'required|date',
            'type' => 'required|in:BPV,BRV,CPV,CRV,JVR',
            'narration' => 'nullable|string',
            'entries' => 'required|array|min:2',
            'entries.*.account_id' => 'required|exists:chart_of_accounts,id',
            'entries.*.description' => 'nullable|string',
            'entries.*.debit' => 'required_without:entries.*.credit|numeric|min:0',
            'entries.*.credit' => 'required_without:entries.*.debit|numeric|min:0',
        ]);

        // Validate double entry
        $totalDebit = collect($validated['entries'])->sum('debit');
        $totalCredit = collect($validated['entries'])->sum('credit');

        if (abs($totalDebit - $totalCredit) > 0.01) {
            return back()->withInput()->with('error', 'Debit and Credit must be equal. Difference: ' . abs($totalDebit - $totalCredit));
        }

        DB::beginTransaction();
        try {
            $voucher = Voucher::create([
                'voucher_number' => $this->generateVoucherNumber($validated['type']),
                'voucher_date' => $validated['voucher_date'],
                'type' => $validated['type'],
                'narration' => $validated['narration'] ?? null,
                'total_debit' => $totalDebit,
                'total_credit' => $totalCredit,
                'status' => 'draft',
                'created_by' => auth()->id(),
            ]);

            foreach ($validated['entries'] as $index => $entry) {
                $voucher->entries()->create([
                    'account_id' => $entry['account_id'],
                    'description' => $entry['description'] ?? null,
                    'debit' => $entry['debit'] ?? 0,
                    'credit' => $entry['credit'] ?? 0,
                    'sequence' => $index + 1,
                ]);
            }

            DB::commit();

            return redirect()->route('finance.vouchers.show', $voucher)
                ->with('success', 'Voucher created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Error creating voucher: ' . $e->getMessage());
        }
    }

    public function show(Voucher $voucher)
    {
        $voucher->load(['entries.account', 'creator', 'postedBy', 'cancelledBy']);
        return view('finance.vouchers.show', compact('voucher'));
    }

    public function post(Voucher $voucher)
    {
        if ($voucher->status !== 'draft') {
            return back()->with('error', 'Only draft vouchers can be posted.');
        }

        $voucher->update([
            'status' => 'posted',
            'posted_date' => now(),
            'posted_by' => auth()->id(),
        ]);

        return back()->with('success', 'Voucher posted successfully.');
    }

    public function unpost(Voucher $voucher)
    {
        if ($voucher->status !== 'posted') {
            return back()->with('error', 'Only posted vouchers can be unposted.');
        }

        $voucher->update([
            'status' => 'unposted',
        ]);

        return back()->with('success', 'Voucher unposted successfully.');
    }

    private function generateVoucherNumber($type)
    {
        $year = date('Y');
        $lastVoucher = Voucher::where('type', $type)
            ->whereYear('voucher_date', $year)
            ->orderBy('voucher_number', 'desc')
            ->first();

        if ($lastVoucher) {
            $lastNumber = (int) substr($lastVoucher->voucher_number, -4);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        return $type . '-' . $year . '-' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
    }
}

