@extends('layouts.app')

@section('title', 'System Optimization')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">System Optimization</h1>
    </div>

    <div class="bg-white rounded shadow p-6 max-w-md">
        <p class="mb-4 text-gray-600">
            This will clear all caches and optimize the system for better performance.
        </p>
        <form action="{{ route('settings.run-optimization') }}" method="POST">
            @csrf
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">
                Run Optimization
            </button>
        </form>
    </div>
</div>
@endsection
