@extends('layouts.app')

@section('title', 'View Party Fuel Rate')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Party Fuel Rate Details</h1>
        <div class="flex gap-2">
            <a href="{{ route('s2e.party-fuel-rates.edit', $partyFuelRate) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-600-hover">
                Edit
            </a>
            <a href="{{ route('s2e.party-fuel-rates.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                Back to List
            </a>
        </div>
    </div>

    <div class="bg-white rounded shadow p-6">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-500">Party</label>
                <p class="mt-1 text-lg">{{ $partyFuelRate->party->name }} ({{ $partyFuelRate->party->code }})</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-500">Fuel Rate</label>
                <p class="mt-1 text-lg">{{ number_format($partyFuelRate->fuel_rate, 2) }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-500">Rate Type</label>
                <p class="mt-1 text-lg">{{ strtoupper($partyFuelRate->rate_type) }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-500">Effective From</label>
                <p class="mt-1 text-lg">{{ $partyFuelRate->effective_from ? $partyFuelRate->effective_from->format('Y-m-d') : '-' }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-500">Effective To</label>
                <p class="mt-1 text-lg">{{ $partyFuelRate->effective_to ? $partyFuelRate->effective_to->format('Y-m-d') : '-' }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-500">Status</label>
                <p class="mt-1">
                    <span class="px-2 py-1 text-xs rounded {{ $partyFuelRate->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $partyFuelRate->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-500">Created At</label>
                <p class="mt-1 text-lg">{{ $partyFuelRate->created_at->format('Y-m-d H:i:s') }}</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-500">Updated At</label>
                <p class="mt-1 text-lg">{{ $partyFuelRate->updated_at->format('Y-m-d H:i:s') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

