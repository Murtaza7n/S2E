<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use App\Models\Deduction;
use App\Models\Allowance;
use App\Models\Employee;
use Illuminate\Http\Request;

class DeductionAllowanceController extends Controller
{
    public function index()
    {
        $deductions = Deduction::where('is_active', true)->get();
        $allowances = Allowance::where('is_active', true)->get();
        
        return view('payroll.deductions-allowances.index', compact('deductions', 'allowances'));
    }

    public function create()
    {
        $employees = Employee::where('is_active', true)->get();
        return view('payroll.deductions-allowances.create', compact('employees'));
    }

    public function store(Request $request)
    {
        if ($request->type === 'deduction') {
            $validated = $request->validate([
                'employee_id' => 'required|exists:employees,id',
                'deduction_id' => 'required|exists:deductions,id',
                'amount' => 'required|numeric|min:0',
                'effective_from' => 'required|date',
                'effective_to' => 'nullable|date|after:effective_from',
            ]);
            
            \App\Models\EmployeeDeduction::create($validated);
        } else {
            $validated = $request->validate([
                'employee_id' => 'required|exists:employees,id',
                'allowance_id' => 'required|exists:allowances,id',
                'amount' => 'required|numeric|min:0',
                'effective_from' => 'required|date',
                'effective_to' => 'nullable|date|after:effective_from',
            ]);
            
            \App\Models\EmployeeAllowance::create($validated);
        }
        
        return redirect()->route('payroll.deductions-allowances.index')
            ->with('success', 'Record created successfully.');
    }
}

