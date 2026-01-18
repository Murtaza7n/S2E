@extends('layouts.app')

@section('title', 'Trial Balance')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Trial Balance</h1>

    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <form method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
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
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Account</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Debit</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Credit</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($balances as $balance)
                <tr>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $balance['account']->code }} - {{ $balance['account']->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right">Rs. {{ number_format($balance['debit'], 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right">Rs. {{ number_format($balance['credit'], 2) }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="bg-gray-50">
                <tr>
                    <td class="px-6 py-4 text-sm font-bold text-gray-900">Total:</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-900 text-right">Rs. {{ number_format($totalDebit, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-900 text-right">Rs. {{ number_format($totalCredit, 2) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

