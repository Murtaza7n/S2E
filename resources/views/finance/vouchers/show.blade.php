@extends('layouts.app')

@section('title', 'Voucher Details')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900">Voucher: {{ $voucher->voucher_number }}</h1>
        <div class="space-x-2">
            @if($voucher->status === 'draft')
                <form method="POST" action="{{ route('finance.vouchers.post', $voucher) }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Post Voucher
                    </button>
                </form>
            @endif
            @if($voucher->status === 'posted')
                <form method="POST" action="{{ route('finance.vouchers.unpost', $voucher) }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                        Unpost Voucher
                    </button>
                </form>
            @endif
            <a href="{{ route('finance.vouchers.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Back
            </a>
        </div>
    </div>

    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <dt class="text-sm font-medium text-gray-500">Date</dt>
                <dd class="text-sm text-gray-900">{{ $voucher->voucher_date->format('d M Y') }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Type</dt>
                <dd class="text-sm text-gray-900">{{ $voucher->type }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Status</dt>
                <dd class="text-sm">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                        @if($voucher->status === 'posted') bg-green-100 text-green-800
                        @else bg-yellow-100 text-yellow-800
                        @endif">
                        {{ ucfirst($voucher->status) }}
                    </span>
                </dd>
            </div>
        </div>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Voucher Entries</h3>
        </div>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Account</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Debit</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Credit</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($voucher->entries as $entry)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $entry->account->code }} - {{ $entry->account->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ $entry->description }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right">Rs. {{ number_format($entry->debit, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right">Rs. {{ number_format($entry->credit, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="bg-gray-50">
                <tr>
                    <td colspan="2" class="px-6 py-4 text-right text-sm font-medium text-gray-900">Total:</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right">Rs. {{ number_format($voucher->total_debit, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right">Rs. {{ number_format($voucher->total_credit, 2) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

