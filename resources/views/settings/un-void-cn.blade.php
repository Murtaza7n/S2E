@extends('layouts.app')

@section('title', 'Un-Void CN')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Un-Void Consignment Note</h1>
    </div>

    <div class="bg-white rounded shadow p-6 max-w-md">
        <form action="{{ route('settings.process-un-void-cn') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">CN Number *</label>
                <input type="text" name="cn_number" value="{{ old('cn_number') }}" 
                    class="w-full border rounded px-3 py-2 @error('cn_number') border-red-500 @enderror" 
                    placeholder="Enter CN Number" required>
                @error('cn_number')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">
                    Un-Void CN
                </button>
                <a href="{{ route('dashboard') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
