@extends('layouts.app')

@section('title', 'Assign Deduction / Allowance')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Assign Deduction / Allowance</h1>
        <a href="{{ route('payroll.deductions-allowances.index') }}" class="text-gray-600 hover:text-gray-800">← Back</a>
    </div>

    <div class="bg-white rounded shadow p-6">
        <form action="{{ route('payroll.deductions-allowances.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-1">Type *</label>
                    <select name="type" id="type" class="w-full border rounded px-3 py-2 @error('type') border-red-500 @enderror" required>
                        <option value="">Select Type</option>
                        <option value="deduction" {{ old('type') == 'deduction' ? 'selected' : '' }}>Deduction</option>
                        <option value="allowance" {{ old('type') == 'allowance' ? 'selected' : '' }}>Allowance</option>
                    </select>
                    @error('type')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Employee *</label>
                    <select name="employee_id" class="w-full border rounded px-3 py-2 @error('employee_id') border-red-500 @enderror" required>
                        <option value="">Select Employee</option>
                        @foreach($employees as $employee)
                            <option value="{{ $employee->id }}" {{ old('employee_id') == $employee->id ? 'selected' : '' }}>
                                {{ $employee->name }} ({{ $employee->employee_code }})
                            </option>
                        @endforeach
                    </select>
                    @error('employee_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div id="deduction-field" style="display: none;">
                    <label class="block text-sm font-medium mb-1">Deduction *</label>
                    <select name="deduction_id" class="w-full border rounded px-3 py-2">
                        <option value="">Select Deduction</option>
                        <!-- Populate with deductions -->
                    </select>
                </div>
                <div id="allowance-field" style="display: none;">
                    <label class="block text-sm font-medium mb-1">Allowance *</label>
                    <select name="allowance_id" class="w-full border rounded px-3 py-2">
                        <option value="">Select Allowance</option>
                        <!-- Populate with allowances -->
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Amount *</label>
                    <input type="number" name="amount" step="0.01" min="0" value="{{ old('amount') }}" 
                        class="w-full border rounded px-3 py-2 @error('amount') border-red-500 @enderror" required>
                    @error('amount')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Effective From *</label>
                    <input type="date" name="effective_from" value="{{ old('effective_from') }}" 
                        class="w-full border rounded px-3 py-2 @error('effective_from') border-red-500 @enderror" required>
                    @error('effective_from')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Effective To</label>
                    <input type="date" name="effective_to" value="{{ old('effective_to') }}" 
                        class="w-full border rounded px-3 py-2 @error('effective_to') border-red-500 @enderror">
                    @error('effective_to')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-6 flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">Assign</button>
                <a href="{{ route('payroll.deductions-allowances.index') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">Cancel</a>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('type').addEventListener('change', function() {
            const type = this.value;
            document.getElementById('deduction-field').style.display = type === 'deduction' ? 'block' : 'none';
            document.getElementById('allowance-field').style.display = type === 'allowance' ? 'block' : 'none';
        });
    </script>
</div>
@endsection

