@extends('layouts.app')

@section('title', 'List of Invoices')

@section('content')
@include('components.print-header')

<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold" style="color: #1E3A5F;">List of Invoices</h1>
        <button onclick="window.print()" class="btn-primary">
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
            <div>
                <label class="block text-sm font-medium mb-1">Date To</label>
                <input type="date" name="date_to" value="{{ request('date_to') }}" class="border rounded px-3 py-2">
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Invoice No.</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Party</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($invoices as $invoice)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $invoice->invoice_number }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $invoice->invoice_date->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $invoice->party->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ number_format($invoice->total_amount, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs rounded" style="background-color: rgba(255, 107, 53, 0.2); color: #E55A2B;">{{ ucfirst($invoice->status) }}</span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">No invoices found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $invoices->links() }}
    </div>
</div>
@endsection

