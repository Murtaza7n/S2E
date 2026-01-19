@extends('layouts.app')

@section('title', 'View Employee Loan')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Loan Details</h1>
        <div class="flex gap-2">
            <a href="{{ route('payroll.loans.edit', $loan) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-600-hover">
                Edit
            </a>
            <a href="{{ route('payroll.loans.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                Back to List
            </a>
        </div>
    </div>

    <div class="bg-white rounded shadow p-6">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-500">Employee</label>
                <p class="mt-1 text-lg">{{ $loan->employee->name }} ({{ $loan->employee->employee_code }})</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Loan Type</label>
                <p class="mt-1 text-lg">{{ $loan->loan_type }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Loan Amount</label>
                <p class="mt-1 text-lg">{{ number_format($loan->loan_amount, 2) }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Installment Amount</label>
                <p class="mt-1 text-lg">{{ number_format($loan->installment_amount, 2) }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Start Date</label>
                <p class="mt-1 text-lg">{{ $loan->start_date->format('Y-m-d') }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-500">End Date</label>
                <p class="mt-1 text-lg">{{ $loan->end_date ? $loan->end_date->format('Y-m-d') : '-' }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Status</label>
                <p class="mt-1">
                    <span class="px-2 py-1 text-xs rounded {{ $loan->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                        {{ ucfirst($loan->status) }}
                    </span>
                </p>
            </div>
        </div>

        @if($loan->installments && $loan->installments->count() > 0)
            <div class="mt-8">
                <h3 class="text-lg font-bold mb-4">Installments</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Amount</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($loan->installments as $installment)
                            <tr>
                                <td class="px-4 py-2">{{ $installment->installment_date->format('Y-m-d') }}</td>
                                <td class="px-4 py-2">{{ number_format($installment->amount, 2) }}</td>
                                <td class="px-4 py-2">
                                    <span class="px-2 py-1 text-xs rounded {{ $installment->is_paid ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                        {{ $installment->is_paid ? 'Paid' : 'Pending' }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection

