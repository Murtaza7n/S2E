<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use App\Models\AuthorizedLeave;
use App\Models\Employee;
use Illuminate\Http\Request;

class AuthorizedLeaveController extends Controller
{
    public function index(Request $request)
    {
        $query = AuthorizedLeave::with('employee');
        
        if ($request->filled('employee_id')) {
            $query->where('employee_id', $request->employee_id);
        }
        
        $leaves = $query->latest()->paginate(50);
        $employees = Employee::where('is_active', true)->get();
        
        return view('payroll.authorized-leaves.index', compact('leaves', 'employees'));
    }

    public function create()
    {
        $employees = Employee::where('is_active', true)->get();
        return view('payroll.authorized-leaves.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'leave_type' => 'required|string',
            'total_leaves' => 'required|integer|min:0',
            'year' => 'required|integer',
        ]);

        AuthorizedLeave::create($validated);
        
        return redirect()->route('payroll.authorized-leaves.index')
            ->with('success', 'Authorized leave created successfully.');
    }

    public function show(AuthorizedLeave $authorizedLeave)
    {
        $authorizedLeave->load('employee');
        return view('payroll.authorized-leaves.show', compact('authorizedLeave'));
    }

    public function edit(AuthorizedLeave $authorizedLeave)
    {
        $employees = Employee::where('is_active', true)->get();
        return view('payroll.authorized-leaves.edit', compact('authorizedLeave', 'employees'));
    }

    public function update(Request $request, AuthorizedLeave $authorizedLeave)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'leave_type' => 'required|string',
            'total_leaves' => 'required|integer|min:0',
            'year' => 'required|integer',
        ]);

        $authorizedLeave->update($validated);
        
        return redirect()->route('payroll.authorized-leaves.index')
            ->with('success', 'Authorized leave updated successfully.');
    }

    public function destroy(AuthorizedLeave $authorizedLeave)
    {
        $authorizedLeave->delete();
        
        return redirect()->route('payroll.authorized-leaves.index')
            ->with('success', 'Authorized leave deleted successfully.');
    }
}

