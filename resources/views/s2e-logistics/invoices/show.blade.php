@extends('layouts.app')

@section('title', 'Invoice Details')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900">Invoice: {{ $invoice->invoice_number }}</h1>
        <div class="space-x-2">
            @if($invoice->status === 'draft')
                <form method="POST" action="{{ route('s2e.invoices.post', $invoice) }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Post Invoice
                    </button>
                </form>
            @endif
            <a href="{{ route('s2e.invoices.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Back
            </a>
        </div>
    </div>

    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <dt class="text-sm font-medium text-gray-500">Invoice Date</dt>
                <dd class="text-sm text-gray-900">{{ $invoice->invoice_date->format('d M Y') }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Party</dt>
                <dd class="text-sm text-gray-900">{{ $invoice->party->name }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Status</dt>
                <dd class="text-sm">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                        @if($invoice->status === 'posted') bg-green-100 text-green-800
                        @else bg-yellow-100 text-yellow-800
                        @endif">
                        {{ ucfirst($invoice->status) }}
                    </span>
                </dd>
            </div>
        </div>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden mb-6">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Invoice Items</h3>
        </div>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">CN Number</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Freight</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Fuel Charge</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Other Charges</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($invoice->items as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->consignmentNote->cn_number }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rs. {{ number_format($item->freight, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rs. {{ number_format($item->fuel_charge, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rs. {{ number_format($item->other_charges, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rs. {{ number_format($item->total, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="bg-gray-50">
                <tr>
                    <td colspan="4" class="px-6 py-4 text-right text-sm font-medium text-gray-900">Subtotal:</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rs. {{ number_format($invoice->subtotal, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="4" class="px-6 py-4 text-right text-sm font-medium text-gray-900">Total Charges:</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rs. {{ number_format($invoice->total_charges, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="4" class="px-6 py-4 text-right text-sm font-medium text-gray-900">Total Fuel:</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rs. {{ number_format($invoice->total_fuel, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="4" class="px-6 py-4 text-right text-sm font-medium text-gray-900">Tax:</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rs. {{ number_format($invoice->tax_amount, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="4" class="px-6 py-4 text-right text-sm font-bold text-gray-900">Grand Total:</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-900">Rs. {{ number_format($invoice->grand_total, 2) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

