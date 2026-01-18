@extends('layouts.app')

@section('title', 'Create Voucher')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Create Voucher</h1>

    <form method="POST" action="{{ route('finance.vouchers.store') }}" class="bg-white shadow rounded-lg p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">Voucher Date *</label>
                <input type="date" name="voucher_date" value="{{ old('voucher_date', date('Y-m-d')) }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Type *</label>
                <select name="type" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="BPV">BPV - Bank Payment Voucher</option>
                    <option value="BRV">BRV - Bank Receipt Voucher</option>
                    <option value="CPV">CPV - Cash Payment Voucher</option>
                    <option value="CRV">CRV - Cash Receipt Voucher</option>
                    <option value="JVR">JVR - Journal Voucher</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Narration</label>
                <input type="text" name="narration" value="{{ old('narration') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Voucher Entries * (Debit and Credit must be equal)</label>
            <div id="entries-container">
                <div class="entry-row grid grid-cols-12 gap-4 mb-4 p-4 border rounded">
                    <div class="col-span-5">
                        <select name="entries[0][account_id]" required class="w-full rounded-md border-gray-300 shadow-sm">
                            <option value="">Select Account</option>
                            @foreach($accounts as $account)
                                <option value="{{ $account->id }}">{{ $account->code }} - {{ $account->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-3">
                        <input type="text" name="entries[0][description]" placeholder="Description"
                            class="w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div class="col-span-2">
                        <input type="number" name="entries[0][debit]" step="0.01" min="0" placeholder="Debit"
                            class="w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div class="col-span-2">
                        <input type="number" name="entries[0][credit]" step="0.01" min="0" placeholder="Credit"
                            class="w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                </div>
            </div>
            <button type="button" onclick="addEntry()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                + Add Entry
            </button>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('finance.vouchers.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Cancel
            </a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create Voucher
            </button>
        </div>
    </form>
</div>

<script>
let entryCount = 1;
function addEntry() {
    const container = document.getElementById('entries-container');
    const newEntry = document.querySelector('.entry-row').cloneNode(true);
    newEntry.querySelectorAll('input, select').forEach(el => {
        el.name = el.name.replace('[0]', '[' + entryCount + ']');
        el.value = '';
    });
    container.appendChild(newEntry);
    entryCount++;
}
</script>
@endsection

