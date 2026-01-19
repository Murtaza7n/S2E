<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\ConsignmentNote;
use App\Models\Invoice;
use App\Services\ExportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesReportsController extends Controller
{
    public function cnDetail(Request $request, ExportService $exportService)
    {
        $query = ConsignmentNote::with(['party', 'originCity', 'destinationCity', 'cargoOffice']);
        
        if ($request->filled('date_from')) {
            $query->where('cn_date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->where('cn_date', '<=', $request->date_to);
        }
        if ($request->filled('party_id')) {
            $query->where('party_id', $request->party_id);
        }
        
        // Export functionality
        if ($request->has('export')) {
            $cns = $query->latest()->get();
            $headers = ['CN Number', 'Date', 'Party', 'Origin', 'Destination', 'Amount', 'Status'];
            $data = $cns->map(function ($cn) {
                return [
                    'CN Number' => $cn->cn_number,
                    'Date' => $cn->cn_date->format('Y-m-d'),
                    'Party' => $cn->party->name ?? '',
                    'Origin' => $cn->originCity->name ?? '',
                    'Destination' => $cn->destinationCity->name ?? '',
                    'Amount' => number_format($cn->total_amount, 2),
                    'Status' => ucfirst($cn->status),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'CN Detail Report', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'CN Detail Report', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'CN Detail Report', $headers);
            }
        }
        
        $cns = $query->latest()->paginate(100);
        
        return view('reports.sales.cn-detail', compact('cns'));
    }

    public function listInvoices(Request $request, ExportService $exportService)
    {
        $query = Invoice::with('party')->where('status', 'posted');
        
        if ($request->filled('date_from')) {
            $query->where('invoice_date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->where('invoice_date', '<=', $request->date_to);
        }
        
        // Export functionality
        if ($request->has('export')) {
            $invoices = $query->latest()->get();
            $headers = ['Invoice No', 'Date', 'Party', 'Amount', 'Sales Tax', 'Grand Total', 'Status'];
            $data = $invoices->map(function ($invoice) {
                return [
                    'Invoice No' => $invoice->invoice_number,
                    'Date' => $invoice->invoice_date->format('Y-m-d'),
                    'Party' => $invoice->party->name ?? '',
                    'Amount' => number_format($invoice->total_amount, 2),
                    'Sales Tax' => number_format($invoice->sales_tax_amount ?? 0, 2),
                    'Grand Total' => number_format($invoice->grand_total, 2),
                    'Status' => ucfirst($invoice->status),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'List of Invoices', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'List of Invoices', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'List of Invoices', $headers);
            }
        }
        
        $invoices = $query->latest()->paginate(100);
        
        return view('reports.sales.list-invoices', compact('invoices'));
    }

    public function cnStatus(Request $request, ExportService $exportService)
    {
        $query = ConsignmentNote::with(['party', 'cargoOffice', 'originCity', 'destinationCity']);
        
        if ($request->filled('status')) {
            $query->where('status', $request->status);
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
                return $exportService->exportToPdf($data, 'CN Status Report', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'CN Status Report', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'CN Status Report', $headers);
            }
        }
        
        $cns = $query->latest()->paginate(100);
        $statusCounts = ConsignmentNote::select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->pluck('count', 'status');
        
        return view('reports.sales.cn-status', compact('cns', 'statusCounts'));
    }

    public function cnProfitLoss(Request $request, ExportService $exportService)
    {
        $fromDate = $request->filled('date_from') ? $request->date_from : date('Y-m-01');
        $toDate = $request->filled('date_to') ? $request->date_to : date('Y-m-d');
        
        $query = ConsignmentNote::whereBetween('cn_date', [$fromDate, $toDate]);
        
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
                return $exportService->exportToPdf($data, 'CN Profit / Loss Report', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'CN Profit / Loss Report', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'CN Profit / Loss Report', $headers);
            }
        }
        
        $cns = $query->with(['party', 'originCity', 'destinationCity'])->get();
        $totalRevenue = $cns->sum('total_amount');
        $totalCost = $cns->sum('cost_price');
        $profitLoss = $totalRevenue - $totalCost;
        
        return view('reports.sales.cn-profit-loss', compact('cns', 'totalRevenue', 'totalCost', 'profitLoss', 'fromDate', 'toDate'));
    }

    public function cityProfitLoss(Request $request, ExportService $exportService)
    {
        $fromDate = $request->filled('date_from') ? $request->date_from : date('Y-m-01');
        $toDate = $request->filled('date_to') ? $request->date_to : date('Y-m-d');
        
        $results = ConsignmentNote::whereBetween('cn_date', [$fromDate, $toDate])
            ->join('cities', 'consignment_notes.destination_city_id', '=', 'cities.id')
            ->select('cities.name as city_name', 
                DB::raw('SUM(consignment_notes.total_amount) as revenue'),
                DB::raw('SUM(consignment_notes.cost_price) as cost'),
                DB::raw('SUM(consignment_notes.total_amount - consignment_notes.cost_price) as profit_loss'))
            ->groupBy('cities.id', 'cities.name')
            ->get();
        
        // Export functionality
        if ($request->has('export')) {
            $headers = ['City', 'Revenue', 'Cost', 'Profit/Loss'];
            $data = $results->map(function ($result) {
                return [
                    'City' => $result->city_name,
                    'Revenue' => number_format($result->revenue, 2),
                    'Cost' => number_format($result->cost, 2),
                    'Profit/Loss' => number_format($result->profit_loss, 2),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'City-wise Profit / Loss Report', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'City-wise Profit / Loss Report', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'City-wise Profit / Loss Report', $headers);
            }
        }
        
        return view('reports.sales.city-profit-loss', compact('results', 'fromDate', 'toDate'));
    }

    public function shipperProfitLoss(Request $request)
    {
        $fromDate = $request->filled('date_from') ? $request->date_from : date('Y-m-01');
        $toDate = $request->filled('date_to') ? $request->date_to : date('Y-m-d');
        
        $results = ConsignmentNote::whereBetween('cn_date', [$fromDate, $toDate])
            ->join('parties', 'consignment_notes.party_id', '=', 'parties.id')
            ->select('parties.name as party_name',
                DB::raw('SUM(consignment_notes.total_amount) as revenue'),
                DB::raw('SUM(consignment_notes.cost_price) as cost'),
                DB::raw('SUM(consignment_notes.total_amount - consignment_notes.cost_price) as profit_loss'))
            ->groupBy('parties.id', 'parties.name')
            ->get();
        
        return view('reports.sales.shipper-profit-loss', compact('results', 'fromDate', 'toDate'));
    }

    public function hubProfitLoss(Request $request)
    {
        $fromDate = $request->filled('date_from') ? $request->date_from : date('Y-m-01');
        $toDate = $request->filled('date_to') ? $request->date_to : date('Y-m-d');
        
        $results = ConsignmentNote::whereBetween('cn_date', [$fromDate, $toDate])
            ->join('cargo_offices', 'consignment_notes.cargo_office_id', '=', 'cargo_offices.id')
            ->select('cargo_offices.name as hub_name',
                DB::raw('SUM(consignment_notes.total_amount) as revenue'),
                DB::raw('SUM(consignment_notes.cost_price) as cost'),
                DB::raw('SUM(consignment_notes.total_amount - consignment_notes.cost_price) as profit_loss'))
            ->groupBy('cargo_offices.id', 'cargo_offices.name')
            ->get();
        
        return view('reports.sales.hub-profit-loss', compact('results', 'fromDate', 'toDate'));
    }

    public function spoProfitLoss(Request $request)
    {
        $fromDate = $request->filled('date_from') ? $request->date_from : date('Y-m-01');
        $toDate = $request->filled('date_to') ? $request->date_to : date('Y-m-d');
        
        $results = ConsignmentNote::whereBetween('cn_date', [$fromDate, $toDate])
            ->join('cargo_officers', 'consignment_notes.spo_code', '=', 'cargo_officers.code')
            ->select('cargo_officers.name as spo_name',
                DB::raw('SUM(consignment_notes.total_amount) as revenue'),
                DB::raw('SUM(consignment_notes.cost_price) as cost'),
                DB::raw('SUM(consignment_notes.total_amount - consignment_notes.cost_price) as profit_loss'))
            ->groupBy('cargo_officers.id', 'cargo_officers.name')
            ->get();
        
        return view('reports.sales.spo-profit-loss', compact('results', 'fromDate', 'toDate'));
    }

    public function hubCnDetail(Request $request)
    {
        $query = ConsignmentNote::with(['party', 'originCity', 'destinationCity']);
        
        if ($request->filled('hub_id')) {
            $query->where('cargo_office_id', $request->hub_id);
        }
        
        $cns = $query->latest()->paginate(100);
        
        return view('reports.sales.hub-cn-detail', compact('cns'));
    }

    public function transporterDocuments(Request $request)
    {
        $query = ConsignmentNote::with(['party', 'vehicle']);
        
        if ($request->filled('vehicle_id')) {
            $query->where('vehicle_id', $request->vehicle_id);
        }
        
        $cns = $query->latest()->paginate(100);
        
        return view('reports.sales.transporter-documents', compact('cns'));
    }

    public function zoneProfitLoss(Request $request)
    {
        $fromDate = $request->filled('date_from') ? $request->date_from : date('Y-m-01');
        $toDate = $request->filled('date_to') ? $request->date_to : date('Y-m-d');
        
        $results = ConsignmentNote::whereBetween('cn_date', [$fromDate, $toDate])
            ->join('cities', 'consignment_notes.destination_city_id', '=', 'cities.id')
            ->join('zones', 'cities.zone_id', '=', 'zones.id')
            ->select('zones.name as zone_name',
                DB::raw('SUM(consignment_notes.total_amount) as revenue'),
                DB::raw('SUM(consignment_notes.cost_price) as cost'),
                DB::raw('SUM(consignment_notes.total_amount - consignment_notes.cost_price) as profit_loss'))
            ->groupBy('zones.id', 'zones.name')
            ->get();
        
        return view('reports.sales.zone-profit-loss', compact('results', 'fromDate', 'toDate'));
    }
}

