@extends('layouts.app')

@section('title', 'Edit Party Fuel Rate')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Edit Party Fuel Rate</h1>
        <a href="{{ route('s2e.party-fuel-rates.index') }}" class="text-gray-600 hover:text-gray-800">← Back to List</a>
    </div>

    <div class="bg-white rounded shadow p-6">
        <form action="{{ route('s2e.party-fuel-rates.update', $partyFuelRate) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-1">Party *</label>
                    <select name="party_id" class="w-full border rounded px-3 py-2 @error('party_id') border-red-500 @enderror" required>
                        <option value="">Select Party</option>
                        @foreach($parties as $party)
                            <option value="{{ $party->id }}" {{ old('party_id', $partyFuelRate->party_id) == $party->id ? 'selected' : '' }}>
                                {{ $party->name }} ({{ $party->code }})
                            </option>
                        @endforeach
                    </select>
                    @error('party_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Fuel Rate *</label>
                    <input type="number" name="fuel_rate" step="0.01" min="0" value="{{ old('fuel_rate', $partyFuelRate->fuel_rate) }}" 
                        class="w-full border rounded px-3 py-2 @error('fuel_rate') border-red-500 @enderror" required>
                    @error('fuel_rate')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Rate Type *</label>
                    <select name="rate_type" class="w-full border rounded px-3 py-2 @error('rate_type') border-red-500 @enderror" required>
                        <option value="per_kg" {{ old('rate_type', $partyFuelRate->rate_type) == 'per_kg' ? 'selected' : '' }}>Per KG</option>
                        <option value="per_cn" {{ old('rate_type', $partyFuelRate->rate_type) == 'per_cn' ? 'selected' : '' }}>Per CN</option>
                        <option value="fixed" {{ old('rate_type', $partyFuelRate->rate_type) == 'fixed' ? 'selected' : '' }}>Fixed</option>
                    </select>
                    @error('rate_type')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Effective From</label>
                    <input type="date" name="effective_from" value="{{ old('effective_from', $partyFuelRate->effective_from?->format('Y-m-d')) }}" 
                        class="w-full border rounded px-3 py-2 @error('effective_from') border-red-500 @enderror">
                    @error('effective_from')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Effective To</label>
                    <input type="date" name="effective_to" value="{{ old('effective_to', $partyFuelRate->effective_to?->format('Y-m-d')) }}" 
                        class="w-full border rounded px-3 py-2 @error('effective_to') border-red-500 @enderror">
                    @error('effective_to')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="flex items-center">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $partyFuelRate->is_active) ? 'checked' : '' }} class="mr-2">
                        <span class="text-sm font-medium">Active</span>
                    </label>
                </div>
            </div>

            <div class="mt-6 flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">
                    Update Fuel Rate
                </button>
                <a href="{{ route('s2e.party-fuel-rates.index') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

