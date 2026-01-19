<?php

namespace App\Http\Controllers;

use App\Models\ConsignmentNote;
use App\Models\Invoice;
use App\Models\Party;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Main Statistics
        try {
            $stats = [
                'total_cns' => ConsignmentNote::count(),
                'pending_cns' => ConsignmentNote::where('status', 'pending')->count(),
                'in_transit_cns' => ConsignmentNote::where('status', 'in_transit')->count(),
                'delivered_cns' => ConsignmentNote::where('status', 'delivered')->count(),
                'total_parties' => Party::where('is_active', true)->count(),
                'total_invoices' => Invoice::where('status', 'posted')->count(),
                'pending_vouchers' => Voucher::where('status', 'draft')->count(),
                'total_revenue' => Invoice::where('status', 'posted')->sum('grand_total') ?? 0,
                'monthly_revenue' => Invoice::where('status', 'posted')
                    ->whereMonth('invoice_date', now()->month)
                    ->whereYear('invoice_date', now()->year)
                    ->sum('grand_total') ?? 0,
                'today_cns' => ConsignmentNote::whereDate('cn_date', today())->count(),
                'today_revenue' => Invoice::where('status', 'posted')
                    ->whereDate('invoice_date', today())
                    ->sum('grand_total') ?? 0,
            ];
        } catch (\Exception $e) {
            $stats = [
                'total_cns' => 0,
                'pending_cns' => 0,
                'in_transit_cns' => 0,
                'delivered_cns' => 0,
                'total_parties' => 0,
                'total_invoices' => 0,
                'pending_vouchers' => 0,
                'total_revenue' => 0,
                'monthly_revenue' => 0,
                'today_cns' => 0,
                'today_revenue' => 0,
            ];
        }

        // Recent Data
        try {
            $recentCns = ConsignmentNote::with(['party', 'cargoOffice'])
                ->latest()
                ->limit(10)
                ->get();
        } catch (\Exception $e) {
            $recentCns = collect([]);
        }

        try {
            $recentInvoices = Invoice::with('party')
                ->where('status', 'posted')
                ->latest()
                ->limit(5)
                ->get();
        } catch (\Exception $e) {
            $recentInvoices = collect([]);
        }

        // Chart Data - Last 7 days CNs
        $chartData = [];
        try {
            for ($i = 6; $i >= 0; $i--) {
                $date = now()->subDays($i);
                $chartData[] = [
                    'date' => $date->format('M d'),
                    'cns' => ConsignmentNote::whereDate('cn_date', $date)->count(),
                    'revenue' => Invoice::where('status', 'posted')
                        ->whereDate('invoice_date', $date)
                        ->sum('grand_total') ?? 0,
                ];
            }
        } catch (\Exception $e) {
            $chartData = [];
        }

        // Status Distribution for Pie Chart
        try {
            $statusDistribution = [
                'pending' => ConsignmentNote::where('status', 'pending')->count(),
                'in_transit' => ConsignmentNote::where('status', 'in_transit')->count(),
                'delivered' => ConsignmentNote::where('status', 'delivered')->count(),
            ];
        } catch (\Exception $e) {
            $statusDistribution = ['pending' => 0, 'in_transit' => 0, 'delivered' => 0];
        }

        // Top Parties by CNs
        try {
            $topParties = ConsignmentNote::select('party_id', DB::raw('count(*) as cn_count'))
                ->whereNotNull('party_id')
                ->with('party')
                ->groupBy('party_id')
                ->orderByDesc('cn_count')
                ->limit(5)
                ->get();
        } catch (\Exception $e) {
            $topParties = collect([]);
        }

        return view('dashboard', compact('stats', 'recentCns', 'recentInvoices', 'chartData', 'statusDistribution', 'topParties'));
    }
}

