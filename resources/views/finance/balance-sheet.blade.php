@extends('layouts.app')

@section('title', 'Balance Sheet')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Balance Sheet</h1>
    </div>

    <!-- Filters -->
    <div class="bg-white shadow rounded-lg p-4 mb-6">
        <form method="GET" action="{{ route('finance.balance-sheet') }}" class="flex gap-4">
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700">As on Date</label>
                <input type="date" name="date" value="{{ $date }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
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
            <h3 class="text-lg font-medium text-gray-900">Balance Sheet as on {{ date('d M Y', strtotime($date)) }}</h3>
        </div>

        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Assets -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Assets</h4>
                    <table class="min-w-full">
                        <tbody class="divide-y divide-gray-200">
                            @forelse($assets as $item)
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-900">{{ $item['account']->name }}</td>
                                <td class="px-4 py-2 text-sm text-gray-900 text-right">{{ number_format($item['balance'], 2) }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="px-4 py-2 text-sm text-gray-500 text-center">No asset accounts</td>
                            </tr>
                            @endforelse
                            <tr class="font-semibold bg-gray-50 border-t-2 border-gray-300">
                                <td class="px-4 py-2 text-sm text-gray-900">Total Assets</td>
                                <td class="px-4 py-2 text-sm text-gray-900 text-right">{{ number_format($totalAssets, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Liabilities & Equity -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Liabilities</h4>
                    <table class="min-w-full mb-6">
                        <tbody class="divide-y divide-gray-200">
                            @forelse($liabilities as $item)
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-900">{{ $item['account']->name }}</td>
                                <td class="px-4 py-2 text-sm text-gray-900 text-right">{{ number_format($item['balance'], 2) }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="px-4 py-2 text-sm text-gray-500 text-center">No liability accounts</td>
                            </tr>
                            @endforelse
                            <tr class="font-semibold bg-gray-50">
                                <td class="px-4 py-2 text-sm text-gray-900">Total Liabilities</td>
                                <td class="px-4 py-2 text-sm text-gray-900 text-right">{{ number_format($totalLiabilities, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <h4 class="text-lg font-semibold text-gray-900 mb-4">Equity</h4>
                    <table class="min-w-full">
                        <tbody class="divide-y divide-gray-200">
                            @forelse($equity as $item)
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-900">{{ $item['account']->name }}</td>
                                <td class="px-4 py-2 text-sm text-gray-900 text-right">{{ number_format($item['balance'], 2) }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="px-4 py-2 text-sm text-gray-500 text-center">No equity accounts</td>
                            </tr>
                            @endforelse
                            <tr class="font-semibold bg-gray-50">
                                <td class="px-4 py-2 text-sm text-gray-900">Total Equity</td>
                                <td class="px-4 py-2 text-sm text-gray-900 text-right">{{ number_format($totalEquity, 2) }}</td>
                            </tr>
                            <tr class="font-semibold bg-gray-100 border-t-2 border-gray-300">
                                <td class="px-4 py-2 text-sm text-gray-900">Total Liabilities & Equity</td>
                                <td class="px-4 py-2 text-sm text-gray-900 text-right">{{ number_format($totalLiabilities + $totalEquity, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

