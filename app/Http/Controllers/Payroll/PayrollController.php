<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use App\Models\PayrollPeriod;
use App\Models\PayrollRecord;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayrollController extends Controller
{
    public function process(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'period' => 'required|date_format:Y-m',
                'from_date' => 'required|date',
                'to_date' => 'required|date',
            ]);

            $period = PayrollPeriod::firstOrCreate(
                ['period' => $validated['period']],
                [
                    'from_date' => $validated['from_date'],
                    'to_date' => $validated['to_date'],
                    'status' => 'draft',
                ]
            );

            if ($period->status === 'processed') {
                return back()->with('error', 'Payroll for this period is already processed.');
            }

            $employees = Employee::where('is_active', true)->get();

            DB::beginTransaction();
            try {
                foreach ($employees as $employee) {
                    $this->calculatePayroll($employee, $period);
                }

                $period->update([
                    'status' => 'processed',
                    'processed_by' => auth()->id(),
                    'processed_date' => now(),
                ]);

                DB::commit();

                return redirect()->route('payroll.registers')
                    ->with('success', 'Payroll processed successfully.');
            } catch (\Exception $e) {
                DB::rollBack();
                return back()->with('error', 'Error processing payroll: ' . $e->getMessage());
            }
        }

        return view('payroll.process');
    }

    public function registers(Request $request)
    {
        $period = $request->filled('period') 
            ? PayrollPeriod::where('period', $request->period)->first()
            : PayrollPeriod::latest()->first();

        $records = $period 
            ? PayrollRecord::where('payroll_period_id', $period->id)
                ->with('employee')
                ->get()
            : collect();

        $periods = PayrollPeriod::latest()->get();

        return view('payroll.registers', compact('records', 'period', 'periods'));
    }

    private function calculatePayroll(Employee $employee, PayrollPeriod $period)
    {
        $basicSalary = $employee->basic_salary;
        
        // Calculate allowances
        $totalAllowances = $employee->allowances()
            ->where('is_active', true)
            ->where(function($q) use ($period) {
                $q->whereNull('effective_from')
                  ->orWhere('effective_from', '<=', $period->to_date);
            })
            ->where(function($q) use ($period) {
                $q->whereNull('effective_to')
                  ->orWhere('effective_to', '>=', $period->from_date);
            })
            ->sum('amount');

        $grossSalary = $basicSalary + $totalAllowances;

        // Calculate deductions
        $totalDeductions = $employee->deductions()
            ->where('is_active', true)
            ->where(function($q) use ($period) {
                $q->whereNull('effective_from')
                  ->orWhere('effective_from', '<=', $period->to_date);
            })
            ->where(function($q) use ($period) {
                $q->whereNull('effective_to')
                  ->orWhere('effective_to', '>=', $period->from_date);
            })
            ->sum('amount');

        // Calculate loan deductions
        $loanDeductions = $employee->loans()
            ->where('status', 'active')
            ->get()
            ->sum(function($loan) {
                return $loan->monthly_installment;
            });

        // Calculate leave deductions (simplified)
        $leaveDeductions = 0; // Implement based on leave policy

        // Calculate tax (simplified - implement proper tax calculation)
        $taxDeductions = 0; // Implement tax calculation

        $netSalary = $grossSalary - $totalDeductions - $loanDeductions - $leaveDeductions - $taxDeductions;

        PayrollRecord::updateOrCreate(
            [
                'payroll_period_id' => $period->id,
                'employee_id' => $employee->id,
            ],
            [
                'basic_salary' => $basicSalary,
                'total_allowances' => $totalAllowances,
                'gross_salary' => $grossSalary,
                'total_deductions' => $totalDeductions,
                'loan_deductions' => $loanDeductions,
                'leave_deductions' => $leaveDeductions,
                'tax_deductions' => $taxDeductions,
                'other_deductions' => 0,
                'net_salary' => $netSalary,
                'working_days' => 30, // Calculate based on period
                'present_days' => 30, // Calculate based on attendance
                'absent_days' => 0,
                'leave_days' => 0,
            ]
        );
    }

    public function listEmployees(Request $request)
    {
        $query = Employee::with(['department', 'designation']);
        
        if ($request->filled('department_id')) {
            $query->where('department_id', $request->department_id);
        }
        
        $employees = $query->latest()->paginate(100);
        return view('payroll.list-employees', compact('employees'));
    }

    public function listMonthlyPayroll(Request $request)
    {
        $period = $request->filled('period') 
            ? PayrollPeriod::where('period', $request->period)->first()
            : PayrollPeriod::latest()->first();
        
        $records = $period 
            ? PayrollRecord::where('payroll_period_id', $period->id)
                ->with('employee')
                ->paginate(100)
            : collect();
        
        $periods = PayrollPeriod::latest()->get();
        
        return view('payroll.list-monthly-payroll', compact('records', 'period', 'periods'));
    }

    public function listDeductionsAllowances(Request $request)
    {
        $query = DB::table('employee_allowances')
            ->join('employees', 'employee_allowances.employee_id', '=', 'employees.id')
            ->join('allowances', 'employee_allowances.allowance_id', '=', 'allowances.id')
            ->select('employees.name as employee_name', 'allowances.name as allowance_name', 
                'employee_allowances.amount', 'employee_allowances.effective_from', 'employee_allowances.effective_to')
            ->union(
                DB::table('employee_deductions')
                    ->join('employees', 'employee_deductions.employee_id', '=', 'employees.id')
                    ->join('deductions', 'employee_deductions.deduction_id', '=', 'deductions.id')
                    ->select('employees.name as employee_name', 'deductions.name as allowance_name',
                        'employee_deductions.amount', 'employee_deductions.effective_from', 'employee_deductions.effective_to')
            );
        
        $records = $query->get();
        
        return view('payroll.list-deductions-allowances', compact('records'));
    }

    public function authorizedLeavesDetail(Request $request)
    {
        $query = \App\Models\AuthorizedLeave::with('employee');
        
        if ($request->filled('employee_id')) {
            $query->where('employee_id', $request->employee_id);
        }
        
        $leaves = $query->latest()->paginate(100);
        
        return view('payroll.authorized-leaves-detail', compact('leaves'));
    }

    public function leaveStatus(Request $request)
    {
        $query = Employee::with(['authorizedLeaves', 'leaveApplications']);
        
        if ($request->filled('employee_id')) {
            $query->where('id', $request->employee_id);
        }
        
        $employees = $query->paginate(100);
        
        return view('payroll.leave-status', compact('employees'));
    }

    public function departmentRegister(Request $request)
    {
        $departmentId = $request->department_id;
        $period = $request->filled('period') 
            ? PayrollPeriod::where('period', $request->period)->first()
            : PayrollPeriod::latest()->first();
        
        $records = PayrollRecord::whereHas('employee', function($q) use ($departmentId) {
            $q->where('department_id', $departmentId);
        })
        ->where('payroll_period_id', $period->id)
        ->with('employee')
        ->get();
        
        return view('payroll.department-register', compact('records', 'period', 'departmentId'));
    }
}

