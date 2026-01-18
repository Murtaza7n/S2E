@extends('layouts.app')

@section('title', 'CN Detail Report')

@section('content')
@include('components.print-header')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold" style="color: #1E3A5F;">CN Detail Report</h1>
        @include('components.export-buttons')
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded shadow mb-4">
        <form method="GET" class="flex gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Date From</label>
                <input type="date" name="date_from" value="{{ request('date_from') }}" class="border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Date To</label>
                <input type="date" name="date_to" value="{{ request('date_to') }}" class="border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Party</label>
                <select name="party_id" class="border rounded px-3 py-2">
                    <option value="">All Parties</option>
                    <!-- Populate with parties -->
                </select>
            </div>
            <div class="flex items-end">
                <button type="submit" class="btn-primary">
                    Generate Report
                </button>
            </div>
        </form>
    </div>

    <!-- Report Table -->
    <div class="bg-white rounded shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">CN No.</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Party</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Origin</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Destination</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($cns as $cn)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cn->cn_number }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cn->cn_date->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cn->party->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cn->originCity->name ?? '-' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cn->destinationCity->name ?? '-' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ number_format($cn->total_amount, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs rounded" style="background-color: rgba(255, 107, 53, 0.2); color: #E55A2B;">{{ ucfirst($cn->status) }}</span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center text-gray-500">No records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $cns->links() }}
    </div>
</div>
@endsection
