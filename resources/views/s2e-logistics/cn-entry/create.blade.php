@extends('layouts.app')

@section('title', 'Create CN')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Create Consignment Note</h1>
    </div>

    <form method="POST" action="{{ route('s2e.cn-entry.store') }}" class="bg-white shadow rounded-lg p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Basic Information -->
            <div class="md:col-span-2">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Basic Information</h3>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">CN Number *</label>
                <input type="text" name="cn_number" value="{{ old('cn_number', $nextCnNumber) }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('cn_number')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">CN Date *</label>
                <input type="date" name="cn_date" value="{{ old('cn_date', date('Y-m-d')) }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('cn_date')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Cargo Office *</label>
                <select name="cargo_office_id" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="">Select Office</option>
                    @foreach($offices as $office)
                        <option value="{{ $office->id }}" {{ old('cargo_office_id') == $office->id ? 'selected' : '' }}>
                            {{ $office->name }}
                        </option>
                    @endforeach
                </select>
                @error('cargo_office_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Party *</label>
                <select name="party_id" id="party_id" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="">Select Party</option>
                    @foreach($parties as $party)
                        <option value="{{ $party->id }}" {{ old('party_id') == $party->id ? 'selected' : '' }}>
                            {{ $party->name }}
                        </option>
                    @endforeach
                </select>
                @error('party_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Item Code</label>
                <select name="item_code_id"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="">Select Item Code</option>
                    @foreach($itemCodes as $item)
                        <option value="{{ $item->id }}" {{ old('item_code_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->code }} - {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Origin & Destination -->
            <div class="md:col-span-2">
                <h3 class="text-lg font-medium text-gray-900 mb-4 mt-6">Origin & Destination</h3>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Origin City *</label>
                <select name="origin_city_id" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="">Select City</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}" {{ old('origin_city_id') == $city->id ? 'selected' : '' }}>
                            {{ $city->name }}
                        </option>
                    @endforeach
                </select>
                @error('origin_city_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Destination City *</label>
                <select name="destination_city_id" id="destination_city_id" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="">Select City</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}" {{ old('destination_city_id') == $city->id ? 'selected' : '' }}>
                            {{ $city->name }}
                        </option>
                    @endforeach
                </select>
                @error('destination_city_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Consignor Details -->
            <div class="md:col-span-2">
                <h3 class="text-lg font-medium text-gray-900 mb-4 mt-6">Consignor Details</h3>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Consignor Name *</label>
                <input type="text" name="consignor_name" value="{{ old('consignor_name') }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('consignor_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Consignor Phone</label>
                <input type="text" name="consignor_phone" value="{{ old('consignor_phone') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Consignor Address</label>
                <textarea name="consignor_address" rows="2"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('consignor_address') }}</textarea>
            </div>

            <!-- Consignee Details -->
            <div class="md:col-span-2">
                <h3 class="text-lg font-medium text-gray-900 mb-4 mt-6">Consignee Details</h3>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Consignee Name *</label>
                <input type="text" name="consignee_name" value="{{ old('consignee_name') }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('consignee_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Consignee Phone</label>
                <input type="text" name="consignee_phone" value="{{ old('consignee_phone') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Consignee Address</label>
                <textarea name="consignee_address" rows="2"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('consignee_address') }}</textarea>
            </div>

            <!-- CN Details -->
            <div class="md:col-span-2">
                <h3 class="text-lg font-medium text-gray-900 mb-4 mt-6">CN Details</h3>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Pieces *</label>
                <input type="number" name="pieces" value="{{ old('pieces', 1) }}" min="1" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('pieces')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Weight (kg) *</label>
                <input type="number" name="weight" id="weight" value="{{ old('weight') }}" step="0.001" min="0" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('weight')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">COD Amount</label>
                <input type="number" name="cod_amount" value="{{ old('cod_amount', 0) }}" step="0.01" min="0"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('cod_amount')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Other Charges</label>
                <input type="number" name="other_charges" value="{{ old('other_charges', 0) }}" step="0.01" min="0"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Remarks</label>
                <textarea name="remarks" rows="3"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('remarks') }}</textarea>
            </div>
        </div>

        <div class="mt-6 flex justify-end space-x-3">
            <a href="{{ route('s2e.cn-entry.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Cancel
            </a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create CN
            </button>
        </div>
    </form>
</div>
@endsection

