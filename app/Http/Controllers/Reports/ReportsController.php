<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\ConsignmentNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function sales(Request $request)
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

        $invoices = $query->get();
        $totalSales = $invoices->sum('grand_total');

        return view('reports.sales', compact('invoices', 'totalSales'));
    }

    public function profitLoss(Request $request)
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

        $cns = $query->get();
        
        $totalRevenue = $cns->sum('total_amount');
        $totalCost = $cns->sum('cost_price');
        $profitLoss = $totalRevenue - $totalCost;

        return view('reports.profit-loss', compact('cns', 'totalRevenue', 'totalCost', 'profitLoss', 'fromDate', 'toDate'));
    }

    public function cnStatus(Request $request)
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

