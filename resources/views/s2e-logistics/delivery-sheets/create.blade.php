@extends('layouts.app')

@section('title', 'Create Delivery Sheet')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Create Delivery Sheet</h1>

    <form method="POST" action="{{ route('s2e.delivery-sheets.store') }}" class="bg-white shadow rounded-lg p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">Delivery Sheet Date *</label>
                <input type="date" name="delivery_sheet_date" value="{{ old('delivery_sheet_date', date('Y-m-d')) }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Cargo Office *</label>
                <select name="cargo_office_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="">Select Office</option>
                    @foreach($offices as $office)
                        <option value="{{ $office->id }}">{{ $office->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Rider *</label>
                <select name="rider_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="">Select Rider</option>
                    @foreach($riders as $rider)
                        <option value="{{ $rider->id }}">{{ $rider->name }} ({{ $rider->code }})</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Select CNs *</label>
            <div class="border rounded-lg p-4 max-h-96 overflow-y-auto">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="text-left"><input type="checkbox" id="select-all"></th>
                            <th class="text-left">CN Number</th>
                            <th class="text-left">Party</th>
                            <th class="text-left">Destination</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($availableCns as $cn)
                        <tr>
                            <td><input type="checkbox" name="cn_ids[]" value="{{ $cn->id }}" class="cn-checkbox"></td>
                            <td>{{ $cn->cn_number }}</td>
                            <td>{{ $cn->party->name }}</td>
                            <td>{{ $cn->destinationCity->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('s2e.delivery-sheets.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Cancel
            </a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create Delivery Sheet
            </button>
        </div>
    </form>
</div>

<script>
document.getElementById('select-all').addEventListener('change', function() {
    document.querySelectorAll('.cn-checkbox').forEach(cb => cb.checked = this.checked);
});
</script>
@endsection

