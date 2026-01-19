@extends('layouts.app')

@section('title', 'Deductions & Allowances')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Deductions & Allowances</h1>
        <a href="{{ route('payroll.deductions-allowances.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-600-hover">
            Add New
        </a>
    </div>

    <div class="grid grid-cols-2 gap-6 mb-6">
        <!-- Deductions -->
        <div class="bg-white rounded shadow p-6">
            <h2 class="text-xl font-bold mb-4">Deductions</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($deductions as $deduction)
                        <tr>
                            <td class="px-4 py-2">{{ $deduction->name }}</td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 text-xs rounded {{ $deduction->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $deduction->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="px-4 py-2 text-center text-gray-500">No deductions found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Allowances -->
        <div class="bg-white rounded shadow p-6">
            <h2 class="text-xl font-bold mb-4">Allowances</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($allowances as $allowance)
                        <tr>
                            <td class="px-4 py-2">{{ $allowance->name }}</td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 text-xs rounded {{ $allowance->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $allowance->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="px-4 py-2 text-center text-gray-500">No allowances found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

