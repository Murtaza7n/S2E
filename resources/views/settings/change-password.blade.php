@extends('layouts.app')

@section('title', 'Change Password')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Change Password</h1>
    </div>

    <div class="bg-white rounded shadow p-6 max-w-md">
        <form action="{{ route('settings.update-password') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Current Password *</label>
                <input type="password" name="current_password" 
                    class="w-full border rounded px-3 py-2 @error('current_password') border-red-500 @enderror" required>
                @error('current_password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">New Password *</label>
                <input type="password" name="password" 
                    class="w-full border rounded px-3 py-2 @error('password') border-red-500 @enderror" required>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Confirm New Password *</label>
                <input type="password" name="password_confirmation" 
                    class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">
                    Change Password
                </button>
                <a href="{{ route('dashboard') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
