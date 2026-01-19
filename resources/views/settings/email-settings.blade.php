@extends('layouts.app')

@section('title', 'Email Settings')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Email Settings</h1>
    </div>

    <div class="bg-white rounded shadow p-6 max-w-2xl">
        <form action="{{ route('settings.update-email-settings') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-1">Mail Host *</label>
                    <input type="text" name="mail_host" value="{{ old('mail_host', config('mail.mailers.smtp.host')) }}" 
                        class="w-full border rounded px-3 py-2 @error('mail_host') border-red-500 @enderror" required>
                    @error('mail_host')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Mail Port *</label>
                    <input type="number" name="mail_port" value="{{ old('mail_port', config('mail.mailers.smtp.port')) }}" 
                        class="w-full border rounded px-3 py-2 @error('mail_port') border-red-500 @enderror" required>
                    @error('mail_port')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Mail Username</label>
                    <input type="text" name="mail_username" value="{{ old('mail_username', config('mail.mailers.smtp.username')) }}" 
                        class="w-full border rounded px-3 py-2">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Mail Password</label>
                    <input type="password" name="mail_password" 
                        class="w-full border rounded px-3 py-2" placeholder="Leave blank to keep current">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Mail Encryption</label>
                    <select name="mail_encryption" class="w-full border rounded px-3 py-2">
                        <option value="">None</option>
                        <option value="tls" {{ config('mail.mailers.smtp.encryption') == 'tls' ? 'selected' : '' }}>TLS</option>
                        <option value="ssl" {{ config('mail.mailers.smtp.encryption') == 'ssl' ? 'selected' : '' }}>SSL</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">From Address *</label>
                    <input type="email" name="mail_from_address" value="{{ old('mail_from_address', config('mail.from.address')) }}" 
                        class="w-full border rounded px-3 py-2 @error('mail_from_address') border-red-500 @enderror" required>
                    @error('mail_from_address')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-2">
                    <label class="block text-sm font-medium mb-1">From Name *</label>
                    <input type="text" name="mail_from_name" value="{{ old('mail_from_name', config('mail.from.name')) }}" 
                        class="w-full border rounded px-3 py-2 @error('mail_from_name') border-red-500 @enderror" required>
                    @error('mail_from_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-6 flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">
                    Update Settings
                </button>
                <a href="{{ route('dashboard') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
