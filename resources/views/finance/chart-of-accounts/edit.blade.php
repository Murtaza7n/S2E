@extends('layouts.app')

@section('title', 'Edit Account')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Edit Account</h1>

    <form method="POST" action="{{ route('finance.chart-of-accounts.update', $chartOfAccount) }}" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">Code *</label>
                <input type="text" name="code" value="{{ old('code', $chartOfAccount->code) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Name *</label>
                <input type="text" name="name" value="{{ old('name', $chartOfAccount->name) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Type *</label>
                <select name="type" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="asset" {{ $chartOfAccount->type === 'asset' ? 'selected' : '' }}>Asset</option>
                    <option value="liability" {{ $chartOfAccount->type === 'liability' ? 'selected' : '' }}>Liability</option>
                    <option value="equity" {{ $chartOfAccount->type === 'equity' ? 'selected' : '' }}>Equity</option>
                    <option value="income" {{ $chartOfAccount->type === 'income' ? 'selected' : '' }}>Income</option>
                    <option value="expense" {{ $chartOfAccount->type === 'expense' ? 'selected' : '' }}>Expense</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Status</label>
                <select name="is_active" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="1" {{ $chartOfAccount->is_active ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ !$chartOfAccount->is_active ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        </div>

        <div class="mt-6 flex justify-end space-x-3">
            <a href="{{ route('finance.chart-of-accounts.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Cancel
            </a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-600-hover text-white font-bold py-2 px-4 rounded">
                Update Account
            </button>
        </div>
    </form>
</div>
@endsection

