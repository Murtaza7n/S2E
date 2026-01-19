@extends('layouts.app')

@section('title', 'View Authorized Leave')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Authorized Leave Details</h1>
        <div class="flex gap-2">
            <a href="{{ route('payroll.authorized-leaves.edit', $authorizedLeave) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-600-hover">
                Edit
            </a>
            <a href="{{ route('payroll.authorized-leaves.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                Back to List
            </a>
        </div>
    </div>

    <div class="bg-white rounded shadow p-6">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-500">Employee</label>
                <p class="mt-1 text-lg">{{ $authorizedLeave->employee->name }} ({{ $authorizedLeave->employee->employee_code }})</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Leave Type</label>
                <p class="mt-1 text-lg">{{ $authorizedLeave->leave_type }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Total Leaves</label>
                <p class="mt-1 text-lg">{{ $authorizedLeave->total_leaves }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Year</label>
                <p class="mt-1 text-lg">{{ $authorizedLeave->year }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Created At</label>
                <p class="mt-1 text-lg">{{ $authorizedLeave->created_at->format('Y-m-d H:i:s') }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Updated At</label>
                <p class="mt-1 text-lg">{{ $authorizedLeave->updated_at->format('Y-m-d H:i:s') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

