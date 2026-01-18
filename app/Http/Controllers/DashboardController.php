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
        $stats = [
            'total_cns' => ConsignmentNote::count(),
            'pending_cns' => ConsignmentNote::where('status', 'pending')->count(),
            'in_transit_cns' => ConsignmentNote::where('status', 'in_transit')->count(),
            'delivered_cns' => ConsignmentNote::where('status', 'delivered')->count(),
            'total_parties' => Party::where('is_active', true)->count(),
            'total_invoices' => Invoice::where('status', 'posted')->count(),
            'pending_vouchers' => Voucher::where('status', 'draft')->count(),
        ];

        $recentCns = ConsignmentNote::with(['party', 'cargoOffice'])
            ->latest()
            ->limit(10)
            ->get();

        return view('dashboard', compact('stats', 'recentCns'));
    }
}

