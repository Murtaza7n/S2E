@extends('layouts.app')

@section('title', 'Data Processing')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Data Processing</h1>
    </div>

    <div class="bg-white rounded shadow p-6 max-w-md">
        <form action="{{ route('settings.process-data') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Process Type *</label>
                <select name="process_type" 
                    class="w-full border rounded px-3 py-2 @error('process_type') border-red-500 @enderror" required>
                    <option value="">Select Process Type</option>
                    <option value="recalculate_rates">Recalculate Rates</option>
                    <option value="update_balances">Update Balances</option>
                    <option value="reprocess_invoices">Reprocess Invoices</option>
                </select>
                @error('process_type')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">
                    Process Data
                </button>
                <a href="{{ route('dashboard') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
