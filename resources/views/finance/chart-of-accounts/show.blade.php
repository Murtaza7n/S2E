@extends('layouts.app')

@section('title', 'Account Details')

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900">Account: {{ $chartOfAccount->name }}</h1>
        <a href="{{ route('finance.chart-of-accounts.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
            Back
        </a>
    </div>

    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <dt class="text-sm font-medium text-gray-500">Code</dt>
                <dd class="text-sm text-gray-900">{{ $chartOfAccount->code }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Type</dt>
                <dd class="text-sm text-gray-900">{{ ucfirst($chartOfAccount->type) }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Status</dt>
                <dd class="text-sm">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $chartOfAccount->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $chartOfAccount->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </dd>
            </div>
        </div>
    </div>
</div>
@endsection

