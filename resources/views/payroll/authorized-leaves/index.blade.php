@extends('layouts.app')

@section('title', 'Authorized Leaves')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Authorized Leaves</h1>
        <a href="{{ route('payroll.authorized-leaves.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-600-hover">
            Add New Leave
        </a>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded shadow mb-4">
        <form method="GET" class="flex gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Employee</label>
                <select name="employee_id" class="border rounded px-3 py-2">
                    <option value="">All Employees</option>
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}" {{ request('employee_id') == $employee->id ? 'selected' : '' }}>
                            {{ $employee->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
                    Filter
                </button>
            </div>
        </form>
    </div>

    <!-- Table -->
    <div class="bg-white rounded shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Employee</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Leave Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total Leaves</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Year</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($leaves as $leave)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $leave->employee->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $leave->leave_type }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $leave->total_leaves }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $leave->year }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('payroll.authorized-leaves.edit', $leave) }}" class="text-blue-600 hover:text-blue-600-hover mr-3">Edit</a>
                            <a href="{{ route('payroll.authorized-leaves.show', $leave) }}" class="text-green-600 hover:text-green-900 mr-3">View</a>
                            <form action="{{ route('payroll.authorized-leaves.destroy', $leave) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">No authorized leaves found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $leaves->links() }}
    </div>
</div>
@endsection

