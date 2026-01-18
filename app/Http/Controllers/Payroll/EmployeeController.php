<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\CargoOffice;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with(['department', 'designation', 'cargoOffice'])
            ->latest()
            ->paginate(50);
        
        return view('payroll.employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::where('is_active', true)->get();
        $designations = Designation::where('is_active', true)->get();
        $offices = CargoOffice::where('is_active', true)->get();
        
        return view('payroll.employees.create', compact('departments', 'designations', 'offices'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_code' => 'required|unique:employees,employee_code',
            'name' => 'required',
            'joining_date' => 'required|date',
            'department_id' => 'required|exists:departments,id',
            'designation_id' => 'required|exists:designations,id',
            'basic_salary' => 'required|numeric|min:0',
        ]);

        Employee::create($validated);

        return redirect()->route('payroll.employees.index')
            ->with('success', 'Employee created successfully.');
    }

    public function show(Employee $employee)
    {
        $employee->load(['department', 'designation', 'cargoOffice', 'allowances.allowance', 'deductions.deduction', 'loans']);
        return view('payroll.employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $departments = Department::where('is_active', true)->get();
        $designations = Designation::where('is_active', true)->get();
        $offices = CargoOffice::where('is_active', true)->get();
        
        return view('payroll.employees.edit', compact('employee', 'departments', 'designations', 'offices'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'required',
            'basic_salary' => 'required|numeric|min:0',
            'is_active' => 'boolean',
        ]);

        $employee->update($validated);

        return redirect()->route('payroll.employees.index')
            ->with('success', 'Employee updated successfully.');
    }
}

