@extends('layouts.app')

@section('title', 'CN-wise Expenses Detail')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">CN-wise Expenses Detail</h1>
        <button onclick="window.print()" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
            Print
        </button>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded shadow mb-4">
        <form method="GET" class="flex gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Date From</label>
                <input type="date" name="date_from" value="{{ request('date_from') }}" class="border rounded px-3 py-2">
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-600-hover">
                    Filter
                </button>
            </div>
        </form>
    </div>

    <div class="bg-white rounded shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">CN Number</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Expense Account</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($expenses as $expense)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $expense->cn->cn_number }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $expense->account->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ number_format($expense->amount, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $expense->expense_date->format('Y-m-d') }}</td>
                        <td class="px-6 py-4">{{ $expense->description }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">No expenses found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $expenses->links() }}
    </div>
</div>
@endsection

