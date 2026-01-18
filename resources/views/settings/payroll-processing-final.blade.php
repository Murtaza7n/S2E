@extends('layouts.app')

@section('title', 'Payroll Processing (FINAL)')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Payroll Processing (FINAL)</h1>
    </div>

    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
        <strong>Warning:</strong> This will finalize payroll processing for the selected month. This action cannot be undone!
    </div>

    <div class="bg-white rounded shadow p-6 max-w-md">
        <form action="{{ route('settings.process-payroll-final') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Month *</label>
                <input type="month" name="month" value="{{ old('month', date('Y-m')) }}" 
                    class="w-full border rounded px-3 py-2 @error('month') border-red-500 @enderror" required>
                @error('month')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="flex items-center">
                    <input type="checkbox" name="confirm" value="1" required class="mr-2">
                    <span class="text-sm font-medium">I confirm this payroll processing is final</span>
                </label>
            </div>
            <div class="flex gap-4">
                <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">
                    Finalize Payroll
                </button>
                <a href="{{ route('dashboard') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
