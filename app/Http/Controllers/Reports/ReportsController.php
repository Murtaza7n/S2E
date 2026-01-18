<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\ConsignmentNote;
use App\Services\ExportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function sales(Request $request, ExportService $exportService)
    {
        $query = Invoice::with('party')
            ->where('status', 'posted');

        if ($request->filled('date_from')) {
            $query->where('invoice_date', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->where('invoice_date', '<=', $request->date_to);
        }

        if ($request->filled('party_id')) {
            $query->where('party_id', $request->party_id);
        }

        // Export functionality
        if ($request->has('export')) {
            $invoices = $query->get();
            $headers = ['Invoice No', 'Date', 'Party', 'Amount', 'Sales Tax', 'Grand Total'];
            $data = $invoices->map(function ($invoice) {
                return [
                    'Invoice No' => $invoice->invoice_number,
                    'Date' => $invoice->invoice_date->format('Y-m-d'),
                    'Party' => $invoice->party->name ?? '',
                    'Amount' => number_format($invoice->sub_total, 2),
                    'Sales Tax' => number_format($invoice->sales_tax_amount ?? 0, 2),
                    'Grand Total' => number_format($invoice->grand_total, 2),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'Sales Report', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'Sales Report', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'Sales Report', $headers);
            }
        }

        $invoices = $query->get();
        $totalSales = $invoices->sum('grand_total');

        return view('reports.sales', compact('invoices', 'totalSales'));
    }

    public function profitLoss(Request $request, ExportService $exportService)
    {
        $fromDate = $request->filled('date_from') ? $request->date_from : date('Y-m-01');
        $toDate = $request->filled('date_to') ? $request->date_to : date('Y-m-d');

        $query = ConsignmentNote::whereBetween('cn_date', [$fromDate, $toDate]);

        if ($request->filled('city_id')) {
            $query->where('destination_city_id', $request->city_id);
        }

        if ($request->filled('party_id')) {
            $query->where('party_id', $request->party_id);
        }

        // Export functionality
        if ($request->has('export')) {
            $cns = $query->with(['party', 'originCity', 'destinationCity'])->get();
            $headers = ['CN Number', 'Date', 'Party', 'Revenue', 'Cost', 'Profit/Loss'];
            $data = $cns->map(function ($cn) {
                $profitLoss = $cn->total_amount - ($cn->cost_price ?? 0);
                return [
                    'CN Number' => $cn->cn_number,
                    'Date' => $cn->cn_date->format('Y-m-d'),
                    'Party' => $cn->party->name ?? '',
                    'Revenue' => number_format($cn->total_amount, 2),
                    'Cost' => number_format($cn->cost_price ?? 0, 2),
                    'Profit/Loss' => number_format($profitLoss, 2),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'Profit / Loss Report', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'Profit / Loss Report', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'Profit / Loss Report', $headers);
            }
        }

        $cns = $query->get();
        
        $totalRevenue = $cns->sum('total_amount');
        $totalCost = $cns->sum('cost_price');
        $profitLoss = $totalRevenue - $totalCost;

        return view('reports.profit-loss', compact('cns', 'totalRevenue', 'totalCost', 'profitLoss', 'fromDate', 'toDate'));
    }

    public function cnStatus(Request $request, ExportService $exportService)
    {
        $query = ConsignmentNote::with(['party', 'cargoOffice', 'originCity', 'destinationCity']);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('date_from')) {
            $query->where('cn_date', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->where('cn_date', '<=', $request->date_to);
        }

        // Export functionality
        if ($request->has('export')) {
            $cns = $query->latest()->get();
            $headers = ['CN Number', 'Date', 'Party', 'Origin', 'Destination', 'Status', 'Amount'];
            $data = $cns->map(function ($cn) {
                return [
                    'CN Number' => $cn->cn_number,
                    'Date' => $cn->cn_date->format('Y-m-d'),
                    'Party' => $cn->party->name ?? '',
                    'Origin' => $cn->originCity->name ?? '',
                    'Destination' => $cn->destinationCity->name ?? '',
                    'Status' => ucfirst($cn->status),
                    'Amount' => number_format($cn->total_amount, 2),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'CN Status & Stock Report', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'CN Status & Stock Report', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'CN Status & Stock Report', $headers);
            }
        }

        $cns = $query->latest()->paginate(100);

        $statusCounts = ConsignmentNote::select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->pluck('count', 'status');

        return view('reports.cn-status', compact('cns', 'statusCounts'));
    }

    public function controlLists(Request $request)
    {
        // Implementation for editable control lists
        return view('reports.control-lists');
    }

    public function codReports(Request $request)
    {
        $query = ConsignmentNote::where('cod_amount', '>', 0);

        if ($request->filled('date_from')) {
            $query->where('cn_date', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->where('cn_date', '<=', $request->date_to);
        }

        $cns = $query->with(['party', 'destinationCity'])->get();
        $totalCod = $cns->sum('cod_amount');

        return view('reports.cod', compact('cns', 'totalCod'));
    }
}

