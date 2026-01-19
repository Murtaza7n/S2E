@extends('layouts.app')

@section('title', 'Create Account')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Create Account</h1>

    <form method="POST" action="{{ route('finance.chart-of-accounts.store') }}" class="bg-white shadow rounded-lg p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">Code *</label>
                <input type="text" name="code" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Name *</label>
                <input type="text" name="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Type *</label>
                <select name="type" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="">Select Type</option>
                    <option value="asset">Asset</option>
                    <option value="liability">Liability</option>
                    <option value="equity">Equity</option>
                    <option value="income">Income</option>
                    <option value="expense">Expense</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Parent Account</label>
                <select name="parent_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="">None</option>
                    @foreach($parents as $parent)
                        <option value="{{ $parent->id }}">{{ $parent->code }} - {{ $parent->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Opening Balance</label>
                <input type="number" name="opening_balance" step="0.01" value="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Balance Type *</label>
                <select name="balance_type" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="dr">Debit (Dr)</option>
                    <option value="cr">Credit (Cr)</option>
                </select>
            </div>
        </div>

        <div class="mt-6 flex justify-end space-x-3">
            <a href="{{ route('finance.chart-of-accounts.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Cancel
            </a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-600-hover text-white font-bold py-2 px-4 rounded">
                Create Account
            </button>
        </div>
    </form>
</div>
@endsection

