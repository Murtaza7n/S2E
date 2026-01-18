@extends('layouts.app')

@section('title', 'Delivery Sheet Details')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900">Delivery Sheet: {{ $deliverySheet->delivery_sheet_number }}</h1>
        <a href="{{ route('s2e.delivery-sheets.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
            Back
        </a>
    </div>

    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div>
                <dt class="text-sm font-medium text-gray-500">Date</dt>
                <dd class="text-sm text-gray-900">{{ $deliverySheet->delivery_sheet_date->format('d M Y') }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Office</dt>
                <dd class="text-sm text-gray-900">{{ $deliverySheet->cargoOffice->name }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Rider</dt>
                <dd class="text-sm text-gray-900">{{ $deliverySheet->rider->name }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Status</dt>
                <dd class="text-sm">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                        @if($deliverySheet->status === 'completed') bg-green-100 text-green-800
                        @elseif($deliverySheet->status === 'assigned') bg-blue-100 text-blue-800
                        @else bg-yellow-100 text-yellow-800
                        @endif">
                        {{ ucfirst($deliverySheet->status) }}
                    </span>
                </dd>
            </div>
        </div>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">CNs in Delivery Sheet</h3>
        </div>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">CN Number</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Party</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Destination</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($deliverySheet->items as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->consignmentNote->cn_number }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->consignmentNote->party->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->consignmentNote->destinationCity->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            @if($item->consignmentNote->status === 'delivered') bg-green-100 text-green-800
                            @elseif($item->consignmentNote->status === 'returned') bg-red-100 text-red-800
                            @else bg-yellow-100 text-yellow-800
                            @endif">
                            {{ ucfirst(str_replace('_', ' ', $item->consignmentNote->status)) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        @if($item->consignmentNote->status === 'out_for_delivery')
                            <form method="POST" action="{{ route('s2e.delivery-sheets.mark-delivered', [$deliverySheet, $item->consignmentNote]) }}" class="inline">
                                @csrf
                                <button type="submit" class="text-green-600 hover:text-green-900 mr-2">Mark Delivered</button>
                            </form>
                            <form method="POST" action="{{ route('s2e.delivery-sheets.mark-returned', [$deliverySheet, $item->consignmentNote]) }}" class="inline">
                                @csrf
                                <button type="submit" class="text-red-600 hover:text-red-900">Mark Returned</button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

