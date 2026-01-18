@extends('layouts.app')

@section('title', 'Change Voucher Date')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Change Voucher Date</h1>
    </div>

    <div class="bg-white rounded shadow p-6 max-w-md">
        <form action="{{ route('finance.update-voucher-date') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Voucher Number *</label>
                <input type="text" name="voucher_id" value="{{ old('voucher_id') }}" 
                    class="w-full border rounded px-3 py-2 @error('voucher_id') border-red-500 @enderror" 
                    placeholder="Enter Voucher ID" required>
                @error('voucher_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">New Date *</label>
                <input type="date" name="new_date" value="{{ old('new_date') }}" 
                    class="w-full border rounded px-3 py-2 @error('new_date') border-red-500 @enderror" required>
                @error('new_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">
                    Change Date
                </button>
                <a href="{{ route('dashboard') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

