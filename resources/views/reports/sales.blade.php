@extends('layouts.app')
    @include('components.export-buttons')

    @include('components.export-buttons')
@section('title', 'Sales Report')
    @include('components.export-buttons')

    @include('components.export-buttons')
@section('content')
    @include('components.export-buttons')
@include('components.print-header')
    @include('components.export-buttons')
<div class="px-4 py-6 sm:px-0">
    @include('components.export-buttons')
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Sales Report</h1>
    @include('components.export-buttons')

    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <form method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">From Date</label>
                <input type="date" name="date_from" value="{{ request('date_from') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">To Date</label>
                <input type="date" name="date_to" value="{{ request('date_to') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-600-hover text-white font-bold py-2 px-4 rounded">
                    Generate
                </button>
            </div>
        </form>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden mb-6">
        <div class="px-6 py-4 bg-gray-50 border-b">
            <h3 class="text-lg font-medium text-gray-900">Total Sales: Rs. {{ number_format($totalSales, 2) }}</h3>
        </div>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Invoice #</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Party</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Amount</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($invoices as $invoice)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $invoice->invoice_number }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $invoice->invoice_date->format('d M Y') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $invoice->party->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right">Rs. {{ number_format($invoice->grand_total, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

