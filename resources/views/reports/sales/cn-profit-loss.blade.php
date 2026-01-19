@extends('layouts.app')

@section('title', 'CN Profit / Loss Report')

@section('content')
@include('components.print-header')

<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold" style="color: #1E3A5F;">CN Profit / Loss Report</h1>
        @include('components.export-buttons')
        <button onclick="window.print()" class="btn-primary">
            Print
        </button>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded shadow mb-4">
        <form method="GET" class="flex gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Date From</label>
                <input type="date" name="date_from" value="{{ $fromDate }}" class="border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Date To</label>
                <input type="date" name="date_to" value="{{ $toDate }}" class="border rounded px-3 py-2">
            </div>
            <div class="flex items-end">
                <button type="submit" class="btn-primary">
                    Generate Report
                </button>
            </div>
        </form>
    </div>

    <!-- Summary -->
    <div class="bg-white rounded shadow p-6 mb-4">
        <div class="grid grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-500">Total Revenue</label>
                <p class="text-2xl font-bold" style="color: #FF6B35;">{{ number_format($totalRevenue, 2) }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium" style="color: #6B7280;">Total Cost</label>
                <p class="text-2xl font-bold" style="color: #6B7280;">{{ number_format($totalCost, 2) }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium" style="color: #6B7280;">Profit / Loss</label>
                <p class="text-2xl font-bold" style="color: {{ $profitLoss >= 0 ? '#FF6B35' : '#6B7280' }};">
                    {{ number_format($profitLoss, 2) }}
                </p>
            </div>
        </div>
    </div>

    <!-- Report Table -->
    <div class="bg-white rounded shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">CN No.</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Party</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Revenue</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Cost</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Profit/Loss</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($cns as $cn)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cn->cn_number }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cn->cn_date->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $cn->party->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ number_format($cn->total_amount, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ number_format($cn->cost_price ?? 0, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span style="color: {{ ($cn->total_amount - ($cn->cost_price ?? 0)) >= 0 ? '#FF6B35' : '#6B7280' }};">
                                {{ number_format($cn->total_amount - ($cn->cost_price ?? 0), 2) }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">No records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

