<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Models\ChartOfAccount;
use Illuminate\Http\Request;

class ChartOfAccountController extends Controller
{
    public function index()
    {
        $accounts = ChartOfAccount::with('parent')
            ->orderBy('code')
            ->get();
        
        return view('finance.chart-of-accounts.index', compact('accounts'));
    }

    public function create()
    {
        $parents = ChartOfAccount::whereNull('parent_id')->get();
        return view('finance.chart-of-accounts.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:chart_of_accounts,code',
            'name' => 'required',
            'type' => 'required|in:asset,liability,equity,income,expense',
            'parent_id' => 'nullable|exists:chart_of_accounts,id',
            'opening_balance' => 'nullable|numeric',
            'balance_type' => 'required|in:dr,cr',
        ]);

        $parent = $validated['parent_id'] ? ChartOfAccount::find($validated['parent_id']) : null;
        $level = $parent ? $parent->level + 1 : 0;

        ChartOfAccount::create([
            ...$validated,
            'level' => $level,
        ]);

        return redirect()->route('finance.chart-of-accounts.index')
            ->with('success', 'Account created successfully.');
    }

    public function show(ChartOfAccount $chartOfAccount)
    {
        $chartOfAccount->load(['parent', 'children', 'voucherEntries.account']);
        return view('finance.chart-of-accounts.show', compact('chartOfAccount'));
    }

    public function edit(ChartOfAccount $chartOfAccount)
    {
        $parents = ChartOfAccount::whereNull('parent_id')
            ->where('id', '!=', $chartOfAccount->id)
            ->get();
        return view('finance.chart-of-accounts.edit', compact('chartOfAccount', 'parents'));
    }

    public function update(Request $request, ChartOfAccount $chartOfAccount)
    {
        $validated = $request->validate([
            'code' => 'required|unique:chart_of_accounts,code,' . $chartOfAccount->id,
            'name' => 'required',
            'type' => 'required|in:asset,liability,equity,income,expense',
            'is_active' => 'boolean',
        ]);

        $chartOfAccount->update($validated);

        return redirect()->route('finance.chart-of-accounts.index')
            ->with('success', 'Account updated successfully.');
    }
}

