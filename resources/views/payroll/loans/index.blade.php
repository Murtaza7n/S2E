@extends('layouts.app')

@section('title', 'Employee Loans')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Employee Loans</h1>
        <a href="{{ route('payroll.loans.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-600-hover">
            Add New Loan
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Loan Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Loan Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Installment</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($loans as $loan)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loan->employee->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loan->loan_type }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ number_format($loan->loan_amount, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ number_format($loan->installment_amount, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs rounded {{ $loan->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                {{ ucfirst($loan->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('payroll.loans.edit', $loan) }}" class="text-blue-600 hover:text-blue-600-hover mr-3">Edit</a>
                            <a href="{{ route('payroll.loans.show', $loan) }}" class="text-green-600 hover:text-green-900 mr-3">View</a>
                            <form action="{{ route('payroll.loans.destroy', $loan) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">No loans found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $loans->links() }}
    </div>
</div>
@endsection

