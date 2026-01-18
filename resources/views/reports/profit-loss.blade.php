@extends('layouts.app')
    @include('components.export-buttons')

    @include('components.export-buttons')
@section('title', 'Profit / Loss Report')
    @include('components.export-buttons')

    @include('components.export-buttons')
@section('content')
    @include('components.export-buttons')
@include('components.print-header')
    @include('components.export-buttons')
<div class="px-4 py-6 sm:px-0">
    @include('components.export-buttons')
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Profit / Loss Report</h1>
    @include('components.export-buttons')

    <!-- Filters -->
    <div class="bg-white shadow rounded-lg p-4 mb-6">
        <form method="GET" action="{{ route('reports.profit-loss') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">From Date</label>
                <input type="date" name="date_from" value="{{ $fromDate }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">To Date</label>
                <input type="date" name="date_to" value="{{ $toDate }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-600-hover text-white font-bold py-2 px-4 rounded">
                    Generate
                </button>
            </div>
        </form>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Profit / Loss Summary</h3>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <dt class="text-sm font-medium text-gray-500">Total Revenue</dt>
                    <dd class="text-2xl font-bold text-gray-900">{{ number_format($totalRevenue, 2) }}</dd>
                </div>
                <div class="bg-red-50 p-4 rounded-lg">
                    <dt class="text-sm font-medium text-gray-500">Total Cost</dt>
                    <dd class="text-2xl font-bold text-gray-900">{{ number_format($totalCost, 2) }}</dd>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <dt class="text-sm font-medium text-gray-500">Net {{ $profitLoss >= 0 ? 'Profit' : 'Loss' }}</dt>
                    <dd class="text-2xl font-bold {{ $profitLoss >= 0 ? 'text-green-600' : 'text-red-600' }}">
                        {{ number_format(abs($profitLoss), 2) }}
                    </dd>
                </div>
            </div>

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">CN Number</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Party</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Revenue</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Cost</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Profit/Loss</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($cns as $cn)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $cn->cn_number }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $cn->party->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-right">{{ number_format($cn->total_amount, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-right">{{ number_format($cn->cost_price, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-right {{ ($cn->total_amount - $cn->cost_price) >= 0 ? 'text-green-600' : 'text-red-600' }}">
                            {{ number_format($cn->total_amount - $cn->cost_price, 2) }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">No data found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

