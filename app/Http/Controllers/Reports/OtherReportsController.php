<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\ConsignmentNote;
use App\Models\DeliverySheet;
use App\Models\Invoice;
use App\Models\Party;
use App\Services\ExportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OtherReportsController extends Controller
{
    public function deliveryCnDetail(Request $request, ExportService $exportService)
    {
        $query = ConsignmentNote::where('status', 'delivered')
            ->with(['party', 'originCity', 'destinationCity', 'deliverySheet']);
        
        if ($request->filled('date_from')) {
            $query->where('delivery_date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->where('delivery_date', '<=', $request->date_to);
        }
        
        // Export functionality
        if ($request->has('export')) {
            $cns = $query->latest()->get();
            $headers = ['CN Number', 'Delivery Date', 'Party', 'Origin', 'Destination', 'Amount'];
            $data = $cns->map(function ($cn) {
                return [
                    'CN Number' => $cn->cn_number,
                    'Delivery Date' => $cn->delivery_date ? $cn->delivery_date->format('Y-m-d') : '',
                    'Party' => $cn->party->name ?? '',
                    'Origin' => $cn->originCity->name ?? '',
                    'Destination' => $cn->destinationCity->name ?? '',
                    'Amount' => number_format($cn->total_amount, 2),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'Delivery CN Detail', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'Delivery CN Detail', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'Delivery CN Detail', $headers);
            }
        }
        
        $cns = $query->latest()->paginate(100);
        
        return view('reports.other.delivery-cn-detail', compact('cns'));
    }

    public function groupOutstanding(Request $request)
    {
        $parties = Party::where('is_active', true)->get();
        $outstandings = [];
        
        foreach ($parties as $party) {
            $balance = $this->calculatePartyBalance($party->id);
            if (abs($balance) > 0.01) {
                $outstandings[] = [
                    'party' => $party,
                    'balance' => $balance,
                    'type' => $balance > 0 ? 'Receivable' : 'Payable',
                ];
            }
        }
        
        return view('reports.other.group-outstanding', compact('outstandings'));
    }

    public function salesTaxInvoices(Request $request)
    {
        $query = Invoice::where('status', 'posted')
            ->whereNotNull('sales_tax_amount')
            ->with('party');
        
        if ($request->filled('date_from')) {
            $query->where('invoice_date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->where('invoice_date', '<=', $request->date_to);
        }
        
        $invoices = $query->latest()->paginate(100);
        
        return view('reports.other.sales-tax-invoices', compact('invoices'));
    }

    public function cnDetailCod(Request $request, ExportService $exportService)
    {
        $query = ConsignmentNote::where('cod_amount', '>', 0)
            ->with(['party', 'destinationCity']);
        
        if ($request->filled('date_from')) {
            $query->where('cn_date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->where('cn_date', '<=', $request->date_to);
        }
        
        // Export functionality
        if ($request->has('export')) {
            $cns = $query->latest()->get();
            $headers = ['CN Number', 'Date', 'Party', 'Destination', 'COD Amount', 'COD Status'];
            $data = $cns->map(function ($cn) {
                return [
                    'CN Number' => $cn->cn_number,
                    'Date' => $cn->cn_date->format('Y-m-d'),
                    'Party' => $cn->party->name ?? '',
                    'Destination' => $cn->destinationCity->name ?? '',
                    'COD Amount' => number_format($cn->cod_amount, 2),
                    'COD Status' => ucfirst($cn->cod_status ?? 'Pending'),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'CN Detail Account (COD)', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'CN Detail Account (COD)', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'CN Detail Account (COD)', $headers);
            }
        }
        
        $cns = $query->latest()->paginate(100);
        $totalCod = $cns->sum('cod_amount');
        
        return view('reports.other.cn-detail-cod', compact('cns', 'totalCod'));
    }

    public function deliverySheetCod(Request $request)
    {
        $query = DeliverySheet::with(['cargoOffice', 'rider'])
            ->whereHas('items.consignmentNote', function($q) {
                $q->where('cod_amount', '>', 0);
            });
        
        if ($request->filled('date_from')) {
            $query->where('delivery_sheet_date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->where('delivery_sheet_date', '<=', $request->date_to);
        }
        
        $sheets = $query->latest()->paginate(100);
        
        return view('reports.other.delivery-sheet-cod', compact('sheets'));
    }

    public function codStatus(Request $request)
    {
        $query = ConsignmentNote::where('cod_amount', '>', 0)
            ->with(['party', 'destinationCity']);
        
        if ($request->filled('status')) {
            $query->where('cod_status', $request->status);
        }
        
        $cns = $query->latest()->paginate(100);
        
        return view('reports.other.cod-status', compact('cns'));
    }

    public function stockInTransit(Request $request, ExportService $exportService)
    {
        $query = ConsignmentNote::where('status', 'in_transit')
            ->with(['party', 'originCity', 'destinationCity', 'loadPlan']);
        
        // Export functionality
        if ($request->has('export')) {
            $cns = $query->latest()->get();
            $headers = ['CN Number', 'Date', 'Party', 'Origin', 'Destination', 'Load Plan', 'Amount'];
            $data = $cns->map(function ($cn) {
                return [
                    'CN Number' => $cn->cn_number,
                    'Date' => $cn->cn_date->format('Y-m-d'),
                    'Party' => $cn->party->name ?? '',
                    'Origin' => $cn->originCity->name ?? '',
                    'Destination' => $cn->destinationCity->name ?? '',
                    'Load Plan' => $cn->loadPlan->load_plan_number ?? '',
                    'Amount' => number_format($cn->total_amount, 2),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'Stock In Transit', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'Stock In Transit', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'Stock In Transit', $headers);
            }
        }
        
        $cns = $query->latest()->paginate(100);
        
        return view('reports.other.stock-in-transit', compact('cns'));
    }

    public function cnInStock(Request $request, ExportService $exportService)
    {
        $query = ConsignmentNote::where('status', 'pending')
            ->with(['party', 'originCity', 'destinationCity', 'cargoOffice'])
            ->latest();
        
        if ($request->filled('office_id')) {
            $query->where('cargo_office_id', $request->office_id);
        }
        
        // Export functionality
        if ($request->has('export')) {
            $cns = $query->get();
            $headers = ['CN Number', 'Date', 'Party', 'Origin', 'Destination', 'Cargo Office', 'Amount'];
            $data = $cns->map(function ($cn) {
                return [
                    'CN Number' => $cn->cn_number,
                    'Date' => $cn->cn_date->format('Y-m-d'),
                    'Party' => $cn->party->name ?? '',
                    'Origin' => $cn->originCity->name ?? '',
                    'Destination' => $cn->destinationCity->name ?? '',
                    'Cargo Office' => $cn->cargoOffice->name ?? '',
                    'Amount' => number_format($cn->total_amount, 2),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'CN In Stock', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'CN In Stock', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'CN In Stock', $headers);
            }
        }
        
        $cns = $query->paginate(100);
        
        return view('reports.other.cn-in-stock', compact('cns'));
    }

    public function nonServiceCharges(Request $request)
    {
        $query = ConsignmentNote::where('non_service_charges', '>', 0)
            ->with(['party', 'originCity', 'destinationCity']);
        
        if ($request->filled('date_from')) {
            $query->where('cn_date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->where('cn_date', '<=', $request->date_to);
        }
        
        $cns = $query->latest()->paginate(100);
        
        return view('reports.other.non-service-charges', compact('cns'));
    }

    private function calculatePartyBalance($partyId)
    {
        $party = Party::find($partyId);
        $openingBalance = $party->opening_balance;
        $openingType = $party->balance_type;
        
        $debit = \App\Models\PartyLedger::where('party_id', $partyId)->sum('debit');
        $credit = \App\Models\PartyLedger::where('party_id', $partyId)->sum('credit');
        
        return $openingType === 'dr' 
            ? $openingBalance + $debit - $credit
            : $openingBalance + $credit - $debit;
    }
}

