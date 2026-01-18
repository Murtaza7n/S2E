@extends('layouts.app')

@section('title', 'List of Vouchers')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">List of Vouchers</h1>
        <button onclick="window.print()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Print
        </button>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded shadow mb-4">
        <form method="GET" class="flex gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Type</label>
                <select name="type" class="border rounded px-3 py-2">
                    <option value="">All Types</option>
                    <option value="BPV" {{ request('type') == 'BPV' ? 'selected' : '' }}>BPV</option>
                    <option value="BRV" {{ request('type') == 'BRV' ? 'selected' : '' }}>BRV</option>
                    <option value="CPV" {{ request('type') == 'CPV' ? 'selected' : '' }}>CPV</option>
                    <option value="CRV" {{ request('type') == 'CRV' ? 'selected' : '' }}>CRV</option>
                    <option value="JVR" {{ request('type') == 'JVR' ? 'selected' : '' }}>JVR</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Status</label>
                <select name="status" class="border rounded px-3 py-2">
                    <option value="">All Statuses</option>
                    <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="posted" {{ request('status') == 'posted' ? 'selected' : '' }}>Posted</option>
                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Voucher No.</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total Debit</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total Credit</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($vouchers as $voucher)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $voucher->voucher_number }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $voucher->voucher_date->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $voucher->type }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ number_format($voucher->total_debit, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ number_format($voucher->total_credit, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs rounded {{ $voucher->status == 'posted' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                {{ ucfirst($voucher->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('finance.vouchers.show', $voucher) }}" class="text-blue-600 hover:text-blue-600-hover">View</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center text-gray-500">No vouchers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $vouchers->links() }}
    </div>
</div>
@endsection

