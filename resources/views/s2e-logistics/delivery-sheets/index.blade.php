@extends('layouts.app')

@section('title', 'Delivery Sheets')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Delivery Sheets</h1>
        <a href="{{ route('s2e.delivery-sheets.create') }}" class="bg-blue-600 hover:bg-blue-600-hover text-white font-bold py-2 px-4 rounded">
            + New Delivery Sheet
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Sheet #</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Office</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Rider</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total CNs</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Delivered</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($deliverySheets as $sheet)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $sheet->delivery_sheet_number }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $sheet->delivery_sheet_date->format('d M Y') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $sheet->cargoOffice->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $sheet->rider->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $sheet->total_cns }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $sheet->delivered_count }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            @if($sheet->status === 'completed') bg-green-100 text-green-800
                            @elseif($sheet->status === 'assigned') bg-blue-100 text-blue-600-hover
                            @else bg-yellow-100 text-yellow-800
                            @endif">
                            {{ ucfirst($sheet->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('s2e.delivery-sheets.show', $sheet) }}" class="text-blue-600 hover:text-blue-600-hover">View</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-6 py-4 text-center text-sm text-gray-500">No delivery sheets found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $deliverySheets->links() }}
    </div>
</div>
@endsection

