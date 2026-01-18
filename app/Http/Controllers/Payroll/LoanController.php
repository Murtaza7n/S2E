<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use App\Models\EmployeeLoan;
use App\Models\Employee;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index(Request $request)
    {
        $query = EmployeeLoan::with('employee');
        
        if ($request->filled('employee_id')) {
            $query->where('employee_id', $request->employee_id);
        }
        
        $loans = $query->latest()->paginate(50);
        $employees = Employee::where('is_active', true)->get();
        
        return view('payroll.loans.index', compact('loans', 'employees'));
    }

    public function create()
    {
        $employees = Employee::where('is_active', true)->get();
        return view('payroll.loans.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'loan_type' => 'required|string',
            'loan_amount' => 'required|numeric|min:0',
            'installment_amount' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'status' => 'required|in:active,completed,closed',
        ]);

        EmployeeLoan::create($validated);
        
        return redirect()->route('payroll.loans.index')
            ->with('success', 'Loan created successfully.');
    }

    public function show(EmployeeLoan $loan)
    {
        $loan->load('employee', 'installments');
        return view('payroll.loans.show', compact('loan'));
    }

    public function edit(EmployeeLoan $loan)
    {
        $employees = Employee::where('is_active', true)->get();
        return view('payroll.loans.edit', compact('loan', 'employees'));
    }

    public function update(Request $request, EmployeeLoan $loan)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'loan_type' => 'required|string',
            'loan_amount' => 'required|numeric|min:0',
            'installment_amount' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'status' => 'required|in:active,completed,closed',
        ]);

        $loan->update($validated);
        
        return redirect()->route('payroll.loans.index')
            ->with('success', 'Loan updated successfully.');
    }

    public function destroy(EmployeeLoan $loan)
    {
        $loan->delete();
        
        return redirect()->route('payroll.loans.index')
            ->with('success', 'Loan deleted successfully.');
    }
}

