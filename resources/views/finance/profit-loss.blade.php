@extends('layouts.app')

@section('title', 'Profit & Loss Statement')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Profit & Loss Statement</h1>
    </div>

    <!-- Filters -->
    <div class="bg-white shadow rounded-lg p-4 mb-6">
        <form method="GET" action="{{ route('finance.profit-loss') }}" class="flex gap-4">
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700">From Date</label>
                <input type="date" name="from_date" value="{{ $fromDate }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700">To Date</label>
                <input type="date" name="to_date" value="{{ $toDate }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
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
            <h3 class="text-lg font-medium text-gray-900">Profit & Loss Statement ({{ date('d M Y', strtotime($fromDate)) }} to {{ date('d M Y', strtotime($toDate)) }})</h3>
        </div>

        <div class="p-6">
            <!-- Income Section -->
            <div class="mb-8">
                <h4 class="text-lg font-semibold text-gray-900 mb-4">Income</h4>
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Account</th>
                            <th class="px-4 py-2 text-right text-sm font-medium text-gray-700">Amount</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($income as $item)
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-900">{{ $item['account']->name }}</td>
                            <td class="px-4 py-2 text-sm text-gray-900 text-right">{{ number_format($item['balance'], 2) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="px-4 py-2 text-sm text-gray-500 text-center">No income accounts</td>
                        </tr>
                        @endforelse
                        <tr class="font-semibold bg-gray-50">
                            <td class="px-4 py-2 text-sm text-gray-900">Total Income</td>
                            <td class="px-4 py-2 text-sm text-gray-900 text-right">{{ number_format($totalIncome, 2) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Expenses Section -->
            <div class="mb-8">
                <h4 class="text-lg font-semibold text-gray-900 mb-4">Expenses</h4>
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Account</th>
                            <th class="px-4 py-2 text-right text-sm font-medium text-gray-700">Amount</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($expenses as $item)
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-900">{{ $item['account']->name }}</td>
                            <td class="px-4 py-2 text-sm text-gray-900 text-right">{{ number_format($item['balance'], 2) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="px-4 py-2 text-sm text-gray-500 text-center">No expense accounts</td>
                        </tr>
                        @endforelse
                        <tr class="font-semibold bg-gray-50">
                            <td class="px-4 py-2 text-sm text-gray-900">Total Expenses</td>
                            <td class="px-4 py-2 text-sm text-gray-900 text-right">{{ number_format($totalExpenses, 2) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Net Profit/Loss -->
            <div class="border-t-2 border-gray-300 pt-4">
                <div class="flex justify-between items-center">
                    <span class="text-lg font-bold text-gray-900">Net {{ $netProfit >= 0 ? 'Profit' : 'Loss' }}</span>
                    <span class="text-lg font-bold {{ $netProfit >= 0 ? 'text-green-600' : 'text-red-600' }}">
                        {{ number_format(abs($netProfit), 2) }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

