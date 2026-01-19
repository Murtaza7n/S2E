@extends('layouts.app')

@section('title', 'Create Invoice')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Create Invoice</h1>

    <form method="POST" action="{{ route('s2e.invoices.store') }}" class="bg-white shadow rounded-lg p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">Invoice Date *</label>
                <input type="date" name="invoice_date" value="{{ old('invoice_date', date('Y-m-d')) }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Party *</label>
                <select name="party_id" id="party_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="">Select Party</option>
                    @foreach($parties as $party)
                        <option value="{{ $party->id }}">{{ $party->name }}</option>
                    @endforeach
                </select>
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
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Select CNs *</label>
            <div class="border rounded-lg p-4 max-h-96 overflow-y-auto">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="text-left"><input type="checkbox" id="select-all"></th>
                            <th class="text-left">CN Number</th>
                            <th class="text-left">Destination</th>
                            <th class="text-left">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($availableCns->flatten() as $cn)
                        <tr>
                            <td><input type="checkbox" name="cn_ids[]" value="{{ $cn->id }}" class="cn-checkbox" data-party="{{ $cn->party_id }}"></td>
                            <td>{{ $cn->cn_number }}</td>
                            <td>{{ $cn->destinationCity->name }}</td>
                            <td>Rs. {{ number_format($cn->total_amount, 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('s2e.invoices.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Cancel
            </a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-600-hover text-white font-bold py-2 px-4 rounded">
                Create Invoice
            </button>
        </div>
    </form>
</div>

<script>
document.getElementById('select-all').addEventListener('change', function() {
    document.querySelectorAll('.cn-checkbox').forEach(cb => cb.checked = this.checked);
});

document.getElementById('party_id').addEventListener('change', function() {
    const partyId = this.value;
    document.querySelectorAll('.cn-checkbox').forEach(cb => {
        if (partyId && cb.dataset.party !== partyId) {
            cb.disabled = true;
            cb.checked = false;
        } else {
            cb.disabled = false;
        }
    });
});
</script>
@endsection

