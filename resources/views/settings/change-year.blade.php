@extends('layouts.app')

@section('title', 'Change Year')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Change System Year</h1>
    </div>

    <div class="bg-white rounded shadow p-6 max-w-md">
        <form action="{{ route('settings.update-year') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Current Year</label>
                <input type="text" value="{{ $currentYear }}" disabled 
                    class="w-full border rounded px-3 py-2 bg-gray-100">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">New Year *</label>
                <input type="number" name="year" min="2020" max="2100" value="{{ old('year', date('Y')) }}" 
                    class="w-full border rounded px-3 py-2 @error('year') border-red-500 @enderror" required>
                @error('year')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">
                    Change Year
                </button>
                <a href="{{ route('dashboard') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
