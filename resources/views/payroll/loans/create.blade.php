@extends('layouts.app')

@section('title', 'Create Employee Loan')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Create Employee Loan</h1>
        <a href="{{ route('payroll.loans.index') }}" class="text-gray-600 hover:text-gray-800">← Back</a>
    </div>

    <div class="bg-white rounded shadow p-6">
        <form action="{{ route('payroll.loans.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-6">
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
                <div>
                    <label class="block text-sm font-medium mb-1">Loan Type *</label>
                    <input type="text" name="loan_type" value="{{ old('loan_type') }}" 
                        class="w-full border rounded px-3 py-2 @error('loan_type') border-red-500 @enderror" required>
                    @error('loan_type')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Loan Amount *</label>
                    <input type="number" name="loan_amount" step="0.01" min="0" value="{{ old('loan_amount') }}" 
                        class="w-full border rounded px-3 py-2 @error('loan_amount') border-red-500 @enderror" required>
                    @error('loan_amount')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Installment Amount *</label>
                    <input type="number" name="installment_amount" step="0.01" min="0" value="{{ old('installment_amount') }}" 
                        class="w-full border rounded px-3 py-2 @error('installment_amount') border-red-500 @enderror" required>
                    @error('installment_amount')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Start Date *</label>
                    <input type="date" name="start_date" value="{{ old('start_date') }}" 
                        class="w-full border rounded px-3 py-2 @error('start_date') border-red-500 @enderror" required>
                    @error('start_date')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">End Date</label>
                    <input type="date" name="end_date" value="{{ old('end_date') }}" 
                        class="w-full border rounded px-3 py-2 @error('end_date') border-red-500 @enderror">
                    @error('end_date')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Status *</label>
                    <select name="status" class="w-full border rounded px-3 py-2 @error('status') border-red-500 @enderror" required>
                        <option value="active" {{ old('status', 'active') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="closed" {{ old('status') == 'closed' ? 'selected' : '' }}>Closed</option>
                    </select>
                    @error('status')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-6 flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">Create Loan</button>
                <a href="{{ route('payroll.loans.index') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

