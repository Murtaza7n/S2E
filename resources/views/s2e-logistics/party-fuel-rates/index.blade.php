@extends('layouts.app')

@section('title', 'Party Fuel Rates')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Party Fuel Rates</h1>
        <a href="{{ route('s2e.party-fuel-rates.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-600-hover">
            Add New Fuel Rate
        </a>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded shadow mb-4">
        <form method="GET" class="flex gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Party</label>
                <select name="party_id" class="border rounded px-3 py-2">
                    <option value="">All Parties</option>
                    @foreach($parties as $party)
                        <option value="{{ $party->id }}" {{ request('party_id') == $party->id ? 'selected' : '' }}>
                            {{ $party->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
                    Filter
                </button>
            </div>
        </form>
    </div>

    <!-- Table -->
    <div class="bg-white rounded shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Party</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Fuel Rate</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Rate Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Effective From</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Effective To</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($fuelRates as $rate)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $rate->party->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ number_format($rate->fuel_rate, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ strtoupper($rate->rate_type) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $rate->effective_from ? $rate->effective_from->format('Y-m-d') : '-' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $rate->effective_to ? $rate->effective_to->format('Y-m-d') : '-' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs rounded {{ $rate->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $rate->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('s2e.party-fuel-rates.edit', $rate) }}" class="text-blue-600 hover:text-blue-600-hover mr-3">Edit</a>
                            <a href="{{ route('s2e.party-fuel-rates.show', $rate) }}" class="text-green-600 hover:text-green-900 mr-3">View</a>
                            <form action="{{ route('s2e.party-fuel-rates.destroy', $rate) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center text-gray-500">No fuel rates found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $fuelRates->links() }}
    </div>
</div>
@endsection

