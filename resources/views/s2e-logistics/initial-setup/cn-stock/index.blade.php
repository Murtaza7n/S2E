@extends('layouts.app')

@section('title', 'CN Stock')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">CN Stock</h1>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Office</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">From CN</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">To CN</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Available</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Used</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($stocks as $stock)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $stock->cargoOffice->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $stock->from_cn_number }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $stock->to_cn_number }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-right">{{ $stock->available_quantity }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right">{{ $stock->used_quantity }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">No CN stock found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $stocks->links() }}
    </div>
</div>
@endsection

