<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountGroupingController extends Controller
{
    public function index()
    {
        return view('finance.account-grouping.index');
    }

    public function create()
    {
        return view('finance.account-grouping.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('finance.account-grouping.index')
            ->with('success', 'Account grouping created successfully.');
    }

    public function show($id)
    {
        return view('finance.account-grouping.show');
    }

    public function edit($id)
    {
        return view('finance.account-grouping.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('finance.account-grouping.index')
            ->with('success', 'Account grouping updated successfully.');
    }

    public function destroy($id)
    {
        return redirect()->route('finance.account-grouping.index')
            ->with('success', 'Account grouping deleted successfully.');
    }
}

