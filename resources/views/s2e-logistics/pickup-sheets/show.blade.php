@extends('layouts.app')

@section('title', 'Pickup Sheet Details')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900">Pickup Sheet: {{ $pickupSheet->pickup_sheet_number }}</h1>
        <a href="{{ route('s2e.pickup-sheets.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
            Back
        </a>
    </div>

    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div>
                <dt class="text-sm font-medium text-gray-500">Date</dt>
                <dd class="text-sm text-gray-900">{{ $pickupSheet->pickup_sheet_date->format('d M Y') }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Office</dt>
                <dd class="text-sm text-gray-900">{{ $pickupSheet->cargoOffice->name }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Rider</dt>
                <dd class="text-sm text-gray-900">{{ $pickupSheet->rider->name }} ({{ $pickupSheet->rider->code }})</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Status</dt>
                <dd class="text-sm">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                        @if($pickupSheet->status === 'completed') bg-green-100 text-green-800
                        @elseif($pickupSheet->status === 'assigned') bg-blue-100 text-blue-600-hover
                        @elseif($pickupSheet->status === 'cancelled') bg-red-100 text-red-800
                        @else bg-yellow-100 text-yellow-800
                        @endif">
                        {{ ucfirst($pickupSheet->status) }}
                    </span>
                </dd>
            </div>
        </div>
        @if($pickupSheet->remarks)
        <div class="mt-4">
            <dt class="text-sm font-medium text-gray-500">Remarks</dt>
            <dd class="text-sm text-gray-900">{{ $pickupSheet->remarks }}</dd>
        </div>
        @endif
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">CNs in Pickup Sheet ({{ $pickupSheet->picked_count }}/{{ $pickupSheet->total_cns }} Picked)</h3>
        </div>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">CN Number</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Party</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Origin</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Destination</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($pickupSheet->items as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->consignmentNote->cn_number }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->consignmentNote->party->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->consignmentNote->originCity->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->consignmentNote->destinationCity->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            @if($item->consignmentNote->status === 'picked') bg-green-100 text-green-800
                            @elseif($item->consignmentNote->status === 'in_transit') bg-blue-100 text-blue-600-hover
                            @else bg-yellow-100 text-yellow-800
                            @endif">
                            {{ ucfirst(str_replace('_', ' ', $item->consignmentNote->status)) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        @if($item->consignmentNote->status === 'pending')
                            <form method="POST" action="{{ route('s2e.pickup-sheets.mark-picked', ['pickupSheet' => $pickupSheet, 'cn' => $item->consignmentNote]) }}" class="inline">
                                @csrf
                                <button type="submit" class="text-green-600 hover:text-green-900">Mark Picked</button>
                            </form>
                        @elseif($item->consignmentNote->status === 'picked')
                            <span class="text-gray-400">Picked on {{ $item->consignmentNote->pickup_date ? $item->consignmentNote->pickup_date->format('d M Y') : 'N/A' }}</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

