<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\AuditLog;
use App\Models\User;
use App\Models\ConsignmentNote;
use App\Models\VoucherEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class SettingsController extends Controller
{
    public function auditLogs(Request $request)
    {
        $query = AuditLog::with('user');

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        if ($request->filled('model_type')) {
            $query->where('model_type', $request->model_type);
        }

        if ($request->filled('date_from')) {
            $query->where('created_at', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->where('created_at', '<=', $request->date_to);
        }

        $logs = $query->latest()->paginate(100);

        return view('settings.audit-logs', compact('logs'));
    }

    public function changePassword()
    {
        return view('settings.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        auth()->user()->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('settings.change-password')
            ->with('success', 'Password changed successfully.');
    }

    public function changeYear()
    {
        $currentYear = date('Y');
        return view('settings.change-year', compact('currentYear'));
    }

    public function updateYear(Request $request)
    {
        $request->validate([
            'year' => 'required|integer|min:2020|max:2100',
        ]);

        // Store year in session or config
        session(['system_year' => $request->year]);

        return redirect()->route('settings.change-year')
            ->with('success', 'System year updated successfully.');
    }

    public function initializeData()
    {
        return view('settings.initialize-data');
    }

    public function processInitializeData(Request $request)
    {
        $request->validate([
            'confirm' => 'required|accepted',
            'date_from' => 'required|date',
            'date_to' => 'required|date|after:date_from',
        ]);

        // Implementation for data initialization
        // This would reset/reprocess data within the date range

        return redirect()->route('settings.initialize-data')
            ->with('success', 'Data initialization completed.');
    }

    public function dataProcessing()
    {
        return view('settings.data-processing');
    }

    public function processData(Request $request)
    {
        $request->validate([
            'process_type' => 'required|in:recalculate_rates,update_balances,reprocess_invoices',
        ]);

        // Implementation for data processing
        Artisan::call('data:process', ['type' => $request->process_type]);

        return redirect()->route('settings.data-processing')
            ->with('success', 'Data processing completed.');
    }

    public function payrollProcessingFinal()
    {
        return view('settings.payroll-processing-final');
    }

    public function processPayrollFinal(Request $request)
    {
        $request->validate([
            'month' => 'required|date_format:Y-m',
            'confirm' => 'required|accepted',
        ]);

        // Final payroll processing
        Artisan::call('payroll:process-final', ['month' => $request->month]);

        return redirect()->route('settings.payroll-processing-final')
            ->with('success', 'Payroll processing finalized.');
    }

    public function systemOptimization()
    {
        return view('settings.system-optimization');
    }

    public function runOptimization(Request $request)
    {
        Artisan::call('optimize:clear');
        Artisan::call('config:cache');
        Artisan::call('route:cache');
        Artisan::call('view:cache');

        return redirect()->route('settings.system-optimization')
            ->with('success', 'System optimization completed.');
    }

    public function unVoidCn()
    {
        return view('settings.un-void-cn');
    }

    public function processUnVoidCn(Request $request)
    {
        $request->validate([
            'cn_number' => 'required|string',
        ]);

        $cn = ConsignmentNote::where('cn_number', $request->cn_number)->first();

        if (!$cn) {
            return back()->withErrors(['cn_number' => 'CN not found.']);
        }

        if ($cn->status !== 'voided') {
            return back()->withErrors(['cn_number' => 'CN is not voided.']);
        }

        $cn->update(['status' => 'pending']);

        return redirect()->route('settings.un-void-cn')
            ->with('success', 'CN un-voided successfully.');
    }

    public function emailSettings()
    {
        return view('settings.email-settings');
    }

    public function updateEmailSettings(Request $request)
    {
        $request->validate([
            'mail_host' => 'required|string',
            'mail_port' => 'required|integer',
            'mail_username' => 'nullable|string',
            'mail_password' => 'nullable|string',
            'mail_encryption' => 'nullable|string',
            'mail_from_address' => 'required|email',
            'mail_from_name' => 'required|string',
        ]);

        // Update .env or config file
        // Implementation depends on how you want to store settings

        return redirect()->route('settings.email-settings')
            ->with('success', 'Email settings updated successfully.');
    }

    public function interBranchJvCode()
    {
        return view('settings.inter-branch-jv-code');
    }

    public function updateInterBranchJvCode(Request $request)
    {
        $request->validate([
            'account_code' => 'required|string',
        ]);

        // Store inter-branch JV code
        // Implementation depends on storage method

        return redirect()->route('settings.inter-branch-jv-code')
            ->with('success', 'Inter-branch JV code updated successfully.');
    }

    public function unpostData()
    {
        return view('settings.unpost-data');
    }

    public function processUnpostData(Request $request)
    {
        $request->validate([
            'date_from' => 'required|date',
            'date_to' => 'required|date|after:date_from',
            'voucher_type' => 'nullable|string',
        ]);

        $query = VoucherEntry::whereHas('voucher', function($q) use ($request) {
            $q->where('status', 'posted')
              ->whereBetween('voucher_date', [$request->date_from, $request->date_to]);
            
            if ($request->filled('voucher_type')) {
                $q->where('voucher_type', $request->voucher_type);
            }
        });

        $count = $query->count();

        // Unpost vouchers
        $query->get()->each(function($entry) {
            $entry->voucher->update(['status' => 'draft']);
        });

        return redirect()->route('settings.unpost-data')
            ->with('success', "{$count} vouchers un-posted successfully.");
    }
}

