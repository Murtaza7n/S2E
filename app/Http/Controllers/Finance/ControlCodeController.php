<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControlCodeController extends Controller
{
    public function index()
    {
        return view('finance.control-codes.index');
    }

    public function create()
    {
        return view('finance.control-codes.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('finance.control-codes.index')
            ->with('success', 'Control code created successfully.');
    }

    public function show($id)
    {
        return view('finance.control-codes.show');
    }

    public function edit($id)
    {
        return view('finance.control-codes.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('finance.control-codes.index')
            ->with('success', 'Control code updated successfully.');
    }

    public function destroy($id)
    {
        return redirect()->route('finance.control-codes.index')
            ->with('success', 'Control code deleted successfully.');
    }
}

