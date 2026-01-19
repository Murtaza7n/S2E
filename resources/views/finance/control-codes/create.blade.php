@extends('layouts.app')

@section('title', 'Create Control Code')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Create Control Code</h1>
        <a href="{{ route('finance.control-codes.index') }}" class="text-gray-600 hover:text-gray-800">← Back</a>
    </div>

    <div class="bg-white rounded shadow p-6">
        <form action="{{ route('finance.control-codes.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-1">Code *</label>
                    <input type="text" name="code" value="{{ old('code') }}" 
                        class="w-full border rounded px-3 py-2 @error('code') border-red-500 @enderror" required>
                    @error('code')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Name *</label>
                    <input type="text" name="name" value="{{ old('name') }}" 
                        class="w-full border rounded px-3 py-2 @error('name') border-red-500 @enderror" required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Account Type</label>
                    <select name="account_type" class="w-full border rounded px-3 py-2">
                        <option value="">Select Type</option>
                        <option value="asset" {{ old('account_type') == 'asset' ? 'selected' : '' }}>Asset</option>
                        <option value="liability" {{ old('account_type') == 'liability' ? 'selected' : '' }}>Liability</option>
                        <option value="equity" {{ old('account_type') == 'equity' ? 'selected' : '' }}>Equity</option>
                        <option value="income" {{ old('account_type') == 'income' ? 'selected' : '' }}>Income</option>
                        <option value="expense" {{ old('account_type') == 'expense' ? 'selected' : '' }}>Expense</option>
                    </select>
                </div>
                <div class="col-span-2">
                    <label class="block text-sm font-medium mb-1">Description</label>
                    <textarea name="description" rows="3" 
                        class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
                </div>
                <div>
                    <label class="flex items-center">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="mr-2">
                        <span class="text-sm font-medium">Active</span>
                    </label>
                </div>
            </div>
            <div class="mt-6 flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">Create</button>
                <a href="{{ route('finance.control-codes.index') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

