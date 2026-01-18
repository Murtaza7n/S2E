@extends('layouts.app')

@section('title', 'Dashboard')

@push('styles')
<style>
    /* Dashboard Enhanced Styles */
    .stat-card {
        background: linear-gradient(135deg, #FFFFFF 0%, #F8F9FA 100%);
        border-left: 4px solid #FF6B35;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #FF6B35, #FF8C66);
    }
    
    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
    
    .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, rgba(255, 107, 53, 0.1), rgba(255, 140, 102, 0.1));
    }
    
    .stat-icon svg {
        width: 28px;
        height: 28px;
    }
    
    .stat-value {
        color: #1E3A5F;
        font-size: 2rem;
        font-weight: 700;
        line-height: 1.2;
    }
    
    .stat-label {
        color: #6B7280;
        font-size: 0.875rem;
        font-weight: 500;
        margin-top: 0.5rem;
    }
    
    .dashboard-table {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }
    
    .dashboard-table thead {
        background: linear-gradient(135deg, #1E3A5F 0%, #152A47 100%);
    }
    
    .dashboard-table thead th {
        color: white;
        font-weight: 600;
        padding: 1rem;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
    }
    
    .dashboard-table tbody tr {
        transition: background-color 0.2s ease;
    }
    
    .dashboard-table tbody tr:nth-child(even) {
        background-color: #F9FAFB;
    }
    
    .dashboard-table tbody tr:hover {
        background-color: #F3F4F6;
    }
    
    .dashboard-table tbody td {
        padding: 1rem;
        border-bottom: 1px solid #E5E7EB;
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: #6B7280;
    }
    
    .empty-state-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 1.5rem;
        opacity: 0.5;
    }
    
    .empty-state-text {
        font-size: 1.125rem;
        font-weight: 500;
        color: #9CA3AF;
    }
</style>
@endpush

@section('content')
<div class="px-4 py-6 sm:px-0">
    <div class="mb-8">
        <h1 class="text-4xl font-bold mb-2" style="color: #1E3A5F;">Dashboard</h1>
        <p class="text-gray-600">Welcome back! Here's your logistics overview.</p>
    </div>

    <!-- Enhanced Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <!-- Total CNs Card -->
        <div class="stat-card">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="stat-icon" style="background: linear-gradient(135deg, rgba(30, 58, 95, 0.1), rgba(30, 58, 95, 0.05));">
                        <svg style="color: #1E3A5F;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="stat-label">Total CNs</p>
                    <p class="stat-value">{{ number_format($stats['total_cns'] ?? 0) }}</p>
                </div>
            </div>
        </div>

        <!-- Pending CNs Card -->
        <div class="stat-card" style="border-left-color: #F59E0B;">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="stat-icon" style="background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(245, 158, 11, 0.05));">
                        <svg style="color: #F59E0B;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="stat-label">Pending CNs</p>
                    <p class="stat-value" style="color: #F59E0B;">{{ number_format($stats['pending_cns'] ?? 0) }}</p>
                </div>
            </div>
        </div>

        <!-- In Transit Card -->
        <div class="stat-card" style="border-left-color: #3B82F6;">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="stat-icon" style="background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.05));">
                        <svg style="color: #3B82F6;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="stat-label">In Transit</p>
                    <p class="stat-value" style="color: #3B82F6;">{{ number_format($stats['in_transit_cns'] ?? 0) }}</p>
                </div>
            </div>
        </div>

        <!-- Delivered Card -->
        <div class="stat-card" style="border-left-color: #10B981;">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="stat-icon" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(16, 185, 129, 0.05));">
                        <svg style="color: #10B981;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="stat-label">Delivered</p>
                    <p class="stat-value" style="color: #10B981;">{{ number_format($stats['delivered_cns'] ?? 0) }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent CNs -->
    <div class="bg-white dashboard-table">
        <div class="px-6 py-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold" style="color: #1E3A5F;">Recent Consignment Notes</h3>
                <a href="{{ route('s2e.cn-entry.index') }}" class="text-sm font-medium" style="color: #FF6B35;">
                    View All →
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full dashboard-table">
                    <thead>
                        <tr>
                            <th>CN Number</th>
                            <th>Party</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @forelse($recentCns ?? [] as $cn)
                        <tr>
                            <td class="font-medium" style="color: #1E3A5F;">
                                <a href="{{ route('s2e.cn-entry.show', $cn) }}" class="hover:underline" style="color: #FF6B35;">
                                    {{ $cn->cn_number }}
                                </a>
                            </td>
                            <td style="color: #6B7280;">{{ $cn->party->name ?? 'N/A' }}</td>
                            <td style="color: #6B7280;">{{ $cn->cn_date->format('d M Y') }}</td>
                            <td>
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full 
                                    @if($cn->status === 'delivered') 
                                        bg-green-100 text-green-800
                                    @elseif($cn->status === 'pending') 
                                        bg-yellow-100 text-yellow-800
                                    @elseif($cn->status === 'in_transit')
                                        bg-blue-100 text-blue-800
                                    @else 
                                        bg-gray-100 text-gray-800
                                    @endif">
                                    {{ ucfirst(str_replace('_', ' ', $cn->status)) }}
                                </span>
                            </td>
                            <td class="font-semibold" style="color: #1E3A5F;">Rs. {{ number_format($cn->total_amount, 2) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">
                                <div class="empty-state">
                                    <div class="empty-state-icon">
                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" style="color: #9CA3AF;">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <p class="empty-state-text">No consignment notes found</p>
                                    <p class="text-sm mt-2" style="color: #9CA3AF;">Start by creating your first CN entry</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

