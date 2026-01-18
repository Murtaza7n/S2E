@extends('layouts.app')

@section('title', 'CN Details')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900">CN: {{ $cnEntry->cn_number }}</h1>
        <div class="space-x-2">
            @if(!$cnEntry->is_invoiced)
                <a href="{{ route('s2e.cn-entry.edit', $cnEntry) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
            @endif
            <a href="{{ route('s2e.cn-entry.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Back
            </a>
        </div>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Basic Information -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Basic Information</h3>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">CN Number</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->cn_number }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">CN Date</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->cn_date->format('d M Y') }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Cargo Office</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->cargoOffice->name }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Party</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->party->name }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Status</dt>
                            <dd class="text-sm">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    @if($cnEntry->status === 'delivered') bg-green-100 text-green-800
                                    @elseif($cnEntry->status === 'pending') bg-yellow-100 text-yellow-800
                                    @else bg-blue-100 text-blue-800
                                    @endif">
                                    {{ ucfirst(str_replace('_', ' ', $cnEntry->status)) }}
                                </span>
                            </dd>
                        </div>
                    </dl>
                </div>

                <!-- Origin & Destination -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Origin & Destination</h3>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Origin City</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->originCity->name }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Destination City</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->destinationCity->name }}</dd>
                        </div>
                        @if($cnEntry->originArea)
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Origin Area</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->originArea->name }}</dd>
                        </div>
                        @endif
                        @if($cnEntry->destinationArea)
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Destination Area</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->destinationArea->name }}</dd>
                        </div>
                        @endif
                    </dl>
                </div>

                <!-- Consignor Details -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Consignor Details</h3>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Name</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->consignor_name }}</dd>
                        </div>
                        @if($cnEntry->consignor_phone)
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Phone</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->consignor_phone }}</dd>
                        </div>
                        @endif
                        @if($cnEntry->consignor_address)
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Address</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->consignor_address }}</dd>
                        </div>
                        @endif
                    </dl>
                </div>

                <!-- Consignee Details -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Consignee Details</h3>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Name</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->consignee_name }}</dd>
                        </div>
                        @if($cnEntry->consignee_phone)
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Phone</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->consignee_phone }}</dd>
                        </div>
                        @endif
                        @if($cnEntry->consignee_address)
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Address</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->consignee_address }}</dd>
                        </div>
                        @endif
                    </dl>
                </div>

                <!-- CN Details -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">CN Details</h3>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Pieces</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->pieces }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Weight</dt>
                            <dd class="text-sm text-gray-900">{{ number_format($cnEntry->weight, 3) }} kg</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Rate</dt>
                            <dd class="text-sm text-gray-900">Rs. {{ number_format($cnEntry->rate, 2) }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Freight</dt>
                            <dd class="text-sm text-gray-900">Rs. {{ number_format($cnEntry->freight, 2) }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Fuel Charge</dt>
                            <dd class="text-sm text-gray-900">Rs. {{ number_format($cnEntry->fuel_charge, 2) }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">COD Amount</dt>
                            <dd class="text-sm text-gray-900">Rs. {{ number_format($cnEntry->cod_amount, 2) }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Other Charges</dt>
                            <dd class="text-sm text-gray-900">Rs. {{ number_format($cnEntry->other_charges, 2) }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Total Amount</dt>
                            <dd class="text-sm font-bold text-gray-900">Rs. {{ number_format($cnEntry->total_amount, 2) }}</dd>
                        </div>
                    </dl>
                </div>

                <!-- Workflow Status -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Workflow Status</h3>
                    <dl class="space-y-2">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">In Load Plan</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->is_in_load_plan ? 'Yes' : 'No' }}</dd>
                        </div>
                        @if($cnEntry->loadPlan)
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Load Plan</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->loadPlan->load_plan_number }}</dd>
                        </div>
                        @endif
                        <div>
                            <dt class="text-sm font-medium text-gray-500">In Delivery Sheet</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->is_in_delivery_sheet ? 'Yes' : 'No' }}</dd>
                        </div>
                        @if($cnEntry->deliverySheet)
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Delivery Sheet</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->deliverySheet->delivery_sheet_number }}</dd>
                        </div>
                        @endif
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Invoiced</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->is_invoiced ? 'Yes' : 'No' }}</dd>
                        </div>
                        @if($cnEntry->invoice)
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Invoice</dt>
                            <dd class="text-sm text-gray-900">{{ $cnEntry->invoice->invoice_number }}</dd>
                        </div>
                        @endif
                    </dl>
                </div>
            </div>

            @if($cnEntry->remarks)
            <div class="mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-2">Remarks</h3>
                <p class="text-sm text-gray-700">{{ $cnEntry->remarks }}</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

