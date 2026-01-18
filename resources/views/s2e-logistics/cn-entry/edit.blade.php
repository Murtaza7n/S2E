@extends('layouts.app')

@section('title', 'Edit CN')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Edit CN: {{ $cnEntry->cn_number }}</h1>
    </div>

    <form method="POST" action="{{ route('s2e.cn-entry.update', $cnEntry) }}" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">CN Date *</label>
                <input type="date" name="cn_date" value="{{ old('cn_date', $cnEntry->cn_date->format('Y-m-d')) }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-s2e-orange focus:ring-s2e-orange">
                @error('cn_date')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Party *</label>
                <select name="party_id" id="party_id" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-s2e-orange focus:ring-s2e-orange">
                    @foreach($parties as $party)
                        <option value="{{ $party->id }}" {{ old('party_id', $cnEntry->party_id) == $party->id ? 'selected' : '' }}>
                            {{ $party->name }}
                        </option>
                    @endforeach
                </select>
                @error('party_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Weight (kg) *</label>
                <input type="number" name="weight" id="weight" value="{{ old('weight', $cnEntry->weight) }}" step="0.001" min="0" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-s2e-orange focus:ring-s2e-orange">
                @error('weight')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">COD Amount</label>
                <input type="number" name="cod_amount" value="{{ old('cod_amount', $cnEntry->cod_amount) }}" step="0.01" min="0"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-s2e-orange focus:ring-s2e-orange">
                @error('cod_amount')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Remarks</label>
                <textarea name="remarks" rows="3"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-s2e-orange focus:ring-s2e-orange">{{ old('remarks', $cnEntry->remarks) }}</textarea>
            </div>
        </div>

        <div class="mt-6 flex justify-end space-x-3">
            <a href="{{ route('s2e.cn-entry.show', $cnEntry) }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Cancel
            </a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-600-hover text-white font-bold py-2 px-4 rounded">
                Update CN
            </button>
        </div>
    </form>
</div>
@endsection

