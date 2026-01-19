@extends('layouts.app')

@section('title', 'Initialize Data')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Initialize Data for Re-processing</h1>
    </div>

    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded mb-6">
        <strong>Warning:</strong> This action will reset/reprocess data within the selected date range. This cannot be undone!
    </div>

    <div class="bg-white rounded shadow p-6 max-w-md">
        <form action="{{ route('settings.process-initialize-data') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Date From *</label>
                <input type="date" name="date_from" value="{{ old('date_from') }}" 
                    class="w-full border rounded px-3 py-2 @error('date_from') border-red-500 @enderror" required>
                @error('date_from')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Date To *</label>
                <input type="date" name="date_to" value="{{ old('date_to') }}" 
                    class="w-full border rounded px-3 py-2 @error('date_to') border-red-500 @enderror" required>
                @error('date_to')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="flex items-center">
                    <input type="checkbox" name="confirm" value="1" required class="mr-2">
                    <span class="text-sm font-medium">I understand this action cannot be undone</span>
                </label>
            </div>
            <div class="flex gap-4">
                <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">
                    Initialize Data
                </button>
                <a href="{{ route('dashboard') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
