@extends('layouts.app')

@section('title', 'Process Payroll')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Process Payroll</h1>

    <form method="POST" action="{{ route('payroll.process') }}" class="bg-white shadow rounded-lg p-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">Period (YYYY-MM) *</label>
                <input type="month" name="period" value="{{ old('period', date('Y-m')) }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">From Date *</label>
                <input type="date" name="from_date" value="{{ old('from_date', date('Y-m-01')) }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">To Date *</label>
                <input type="date" name="to_date" value="{{ old('to_date', date('Y-m-t')) }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Process Payroll
            </button>
        </div>
    </form>
</div>
@endsection

