@extends('layouts.app')

@section('title', 'Edit Authorized Leave')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Edit Authorized Leave</h1>
        <a href="{{ route('payroll.authorized-leaves.index') }}" class="text-gray-600 hover:text-gray-800">← Back</a>
    </div>

    <div class="bg-white rounded shadow p-6">
        <form action="{{ route('payroll.authorized-leaves.update', $authorizedLeave) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-1">Employee *</label>
                    <select name="employee_id" class="w-full border rounded px-3 py-2 @error('employee_id') border-red-500 @enderror" required>
                        <option value="">Select Employee</option>
                        @foreach($employees as $employee)
                            <option value="{{ $employee->id }}" {{ old('employee_id', $authorizedLeave->employee_id) == $employee->id ? 'selected' : '' }}>
                                {{ $employee->name }} ({{ $employee->employee_code }})
                            </option>
                        @endforeach
                    </select>
                    @error('employee_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Leave Type *</label>
                    <input type="text" name="leave_type" value="{{ old('leave_type', $authorizedLeave->leave_type) }}" 
                        class="w-full border rounded px-3 py-2 @error('leave_type') border-red-500 @enderror" required>
                    @error('leave_type')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Total Leaves *</label>
                    <input type="number" name="total_leaves" min="0" value="{{ old('total_leaves', $authorizedLeave->total_leaves) }}" 
                        class="w-full border rounded px-3 py-2 @error('total_leaves') border-red-500 @enderror" required>
                    @error('total_leaves')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Year *</label>
                    <input type="number" name="year" min="2020" max="2100" value="{{ old('year', $authorizedLeave->year) }}" 
                        class="w-full border rounded px-3 py-2 @error('year') border-red-500 @enderror" required>
                    @error('year')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-6 flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-600-hover">Update Leave</button>
                <a href="{{ route('payroll.authorized-leaves.index') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

