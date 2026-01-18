<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupCodeController extends Controller
{
    public function index()
    {
        // Group codes for account grouping
        return view('finance.group-codes.index');
    }

    public function create()
    {
        return view('finance.group-codes.create');
    }

    public function store(Request $request)
    {
        // Implementation for creating group codes
        return redirect()->route('finance.group-codes.index')
            ->with('success', 'Group code created successfully.');
    }

    public function show($id)
    {
        return view('finance.group-codes.show');
    }

    public function edit($id)
    {
        return view('finance.group-codes.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('finance.group-codes.index')
            ->with('success', 'Group code updated successfully.');
    }

    public function destroy($id)
    {
        return redirect()->route('finance.group-codes.index')
            ->with('success', 'Group code deleted successfully.');
    }
}

