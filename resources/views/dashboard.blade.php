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
    
    .stat-trend {
        font-size: 0.75rem;
        margin-top: 0.25rem;
    }
    
    .dashboard-widget {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    
    .dashboard-widget-header {
        background: linear-gradient(135deg, #1E3A5F 0%, #152A47 100%);
        padding: 1rem 1.5rem;
        color: white;
        font-weight: 600;
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
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
    
    .quick-action-btn {
        background: white;
        border: 2px solid #E5E7EB;
        border-radius: 8px;
        padding: 1rem;
        text-align: center;
        transition: all 0.3s ease;
        cursor: pointer;
        text-decoration: none;
        display: block;
    }
    
    .quick-action-btn:hover {
        border-color: #FF6B35;
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .quick-action-btn svg {
        color: #FF6B35;
        margin-bottom: 0.5rem;
    }
    
    .chart-container {
        position: relative;
        height: 200px;
        padding: 1rem;
    }
    
    .bar-chart {
        display: flex;
        align-items: flex-end;
        justify-content: space-around;
        height: 100%;
        gap: 0.5rem;
    }
    
    .bar {
        flex: 1;
        background: linear-gradient(to top, #FF6B35, #FF8C66);
        border-radius: 4px 4px 0 0;
        position: relative;
        min-width: 20px;
        transition: all 0.3s ease;
    }
    
    .bar:hover {
        opacity: 0.8;
        transform: scaleY(1.05);
    }
    
    .bar-label {
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 0.7rem;
        color: #6B7280;
        white-space: nowrap;
    }
    
    .pie-chart {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
    }
    
    .pie-segment {
        display: inline-block;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin-right: 0.5rem;
    }
</style>
@endpush

@section('content')
<div class="px-4 py-6 sm:px-0">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-4xl font-bold mb-2" style="color: #1E3A5F;">Dashboard</h1>
        <p class="text-gray-600">Welcome back! Here's your logistics overview.</p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 mb-8">
        <a href="{{ route('s2e.cn-entry.create') }}" class="quick-action-btn">
            <svg class="w-6 h-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span class="text-sm font-medium" style="color: #1E3A5F;">New CN</span>
        </a>
        <a href="{{ route('s2e.invoices.index') }}" class="quick-action-btn">
            <svg class="w-6 h-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <span class="text-sm font-medium" style="color: #1E3A5F;">New Invoice</span>
        </a>
        <a href="{{ route('s2e.delivery-sheets.create') }}" class="quick-action-btn">
            <svg class="w-6 h-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            <span class="text-sm font-medium" style="color: #1E3A5F;">Delivery Sheet</span>
        </a>
        <a href="{{ route('s2e.pickup-sheets.create') }}" class="quick-action-btn">
            <svg class="w-6 h-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
            </svg>
            <span class="text-sm font-medium" style="color: #1E3A5F;">Pickup Sheet</span>
        </a>
        <a href="{{ route('reports.sales.cn-detail') }}" class="quick-action-btn">
            <svg class="w-6 h-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
            <span class="text-sm font-medium" style="color: #1E3A5F;">Reports</span>
        </a>
        <a href="{{ route('finance.chart-of-accounts.index') }}" class="quick-action-btn">
            <svg class="w-6 h-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-sm font-medium" style="color: #1E3A5F;">Finance</span>
        </a>
    </div>

    <!-- Enhanced Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
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
                    <p class="stat-trend" style="color: #6B7280;">Today: {{ number_format($stats['today_cns'] ?? 0) }}</p>
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
                    <p class="stat-trend" style="color: #6B7280;">Requires attention</p>
                </div>
            </div>
        </div>

        <!-- Total Revenue Card -->
        <div class="stat-card" style="border-left-color: #10B981;">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="stat-icon" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(16, 185, 129, 0.05));">
                        <svg style="color: #10B981;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    </div>
                <div>
                    <p class="stat-label">Total Revenue</p>
                    <p class="stat-value" style="color: #10B981;">Rs. {{ number_format($stats['total_revenue'] ?? 0, 0) }}</p>
                    <p class="stat-trend" style="color: #6B7280;">This month: Rs. {{ number_format($stats['monthly_revenue'] ?? 0, 0) }}</p>
                </div>
            </div>
        </div>

        <!-- Delivered Card -->
        <div class="stat-card" style="border-left-color: #3B82F6;">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="stat-icon" style="background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.05));">
                        <svg style="color: #3B82F6;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="stat-label">Delivered</p>
                    <p class="stat-value" style="color: #3B82F6;">{{ number_format($stats['delivered_cns'] ?? 0) }}</p>
                    <p class="stat-trend" style="color: #6B7280;">Success rate: {{ ($stats['total_cns'] ?? 0) > 0 ? number_format((($stats['delivered_cns'] ?? 0) / ($stats['total_cns'] ?? 1)) * 100, 1) : 0 }}%</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Additional Stats -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <!-- CN Trend Chart -->
        <div class="dashboard-widget lg:col-span-2">
            <div class="dashboard-widget-header">CN Trend (Last 7 Days)</div>
            <div class="chart-container">
                <div class="bar-chart">
                    @foreach($chartData ?? [] as $data)
                    @php
                        $maxCns = max(array_column($chartData ?? [], 'cns'));
                        $maxCns = $maxCns > 0 ? $maxCns : 1;
                        $barHeight = max(10, ($data['cns'] / $maxCns) * 100);
                    @endphp
                    <div class="bar" style="height: {{ $barHeight }}%;" title="{{ $data['cns'] }} CNs">
                        <div class="bar-label">{{ $data['date'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Status Distribution -->
        <div class="dashboard-widget">
            <div class="dashboard-widget-header">Status Distribution</div>
            <div class="pie-chart">
                <div class="w-full">
                    @php
                        $total = array_sum($statusDistribution ?? []);
                        $total = $total > 0 ? $total : 1; // Prevent division by zero
                        $pendingPercent = ($statusDistribution['pending'] ?? 0) / $total * 100;
                        $transitPercent = ($statusDistribution['in_transit'] ?? 0) / $total * 100;
                        $deliveredPercent = ($statusDistribution['delivered'] ?? 0) / $total * 100;
                    @endphp
                    <div class="mb-3">
                        <div class="flex items-center mb-2">
                            <span class="pie-segment" style="background: #F59E0B;"></span>
                            <span class="text-sm" style="color: #1E3A5F;">Pending</span>
                            <span class="ml-auto font-semibold" style="color: #1E3A5F;">{{ number_format($pendingPercent, 1) }}%</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <span class="pie-segment" style="background: #3B82F6;"></span>
                            <span class="text-sm" style="color: #1E3A5F;">In Transit</span>
                            <span class="ml-auto font-semibold" style="color: #1E3A5F;">{{ number_format($transitPercent, 1) }}%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="pie-segment" style="background: #10B981;"></span>
                            <span class="text-sm" style="color: #1E3A5F;">Delivered</span>
                            <span class="ml-auto font-semibold" style="color: #1E3A5F;">{{ number_format($deliveredPercent, 1) }}%</span>
                        </div>
                    </div>
                    <div class="text-center pt-4 border-t" style="border-color: #E5E7EB;">
                        <p class="text-2xl font-bold" style="color: #1E3A5F;">{{ $total }}</p>
                        <p class="text-xs" style="color: #6B7280;">Total CNs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Stats Row -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="dashboard-widget">
            <div class="p-6 text-center">
                <div class="text-3xl font-bold mb-2" style="color: #1E3A5F;">{{ number_format($stats['total_parties'] ?? 0) }}</div>
                <div class="text-sm" style="color: #6B7280;">Active Parties</div>
            </div>
        </div>
        <div class="dashboard-widget">
            <div class="p-6 text-center">
                <div class="text-3xl font-bold mb-2" style="color: #FF6B35;">{{ number_format($stats['total_invoices'] ?? 0) }}</div>
                <div class="text-sm" style="color: #6B7280;">Posted Invoices</div>
            </div>
        </div>
        <div class="dashboard-widget">
            <div class="p-6 text-center">
                <div class="text-3xl font-bold mb-2" style="color: #F59E0B;">{{ number_format($stats['pending_vouchers'] ?? 0) }}</div>
                <div class="text-sm" style="color: #6B7280;">Pending Vouchers</div>
            </div>
        </div>
        <div class="dashboard-widget">
            <div class="p-6 text-center">
                <div class="text-3xl font-bold mb-2" style="color: #10B981;">Rs. {{ number_format($stats['today_revenue'] ?? 0, 0) }}</div>
                <div class="text-sm" style="color: #6B7280;">Today's Revenue</div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <!-- Recent CNs -->
        <div class="dashboard-widget">
            <div class="dashboard-widget-header">
                <div class="flex items-center justify-between">
                    <span>Recent Consignment Notes</span>
                    <a href="{{ route('s2e.cn-entry.index') }}" class="text-xs font-normal hover:underline" style="color: #FF6B35;">
                        View All →
                    </a>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium" style="color: #6B7280;">CN Number</th>
                            <th class="px-4 py-3 text-left text-xs font-medium" style="color: #6B7280;">Party</th>
                            <th class="px-4 py-3 text-left text-xs font-medium" style="color: #6B7280;">Status</th>
                            <th class="px-4 py-3 text-left text-xs font-medium" style="color: #6B7280;">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentCns ?? [] as $cn)
                        <tr class="border-t" style="border-color: #E5E7EB;">
                            <td class="px-4 py-3">
                                <a href="{{ route('s2e.cn-entry.show', $cn) }}" class="font-medium hover:underline" style="color: #FF6B35;">
                                    {{ $cn->cn_number }}
                                </a>
                            </td>
                            <td class="px-4 py-3 text-sm" style="color: #6B7280;">{{ $cn->party->name ?? 'N/A' }}</td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                    @if($cn->status === 'delivered') bg-green-100 text-green-800
                                    @elseif($cn->status === 'pending') bg-yellow-100 text-yellow-800
                                    @elseif($cn->status === 'in_transit') bg-blue-100 text-blue-800
                                    @else bg-gray-100 text-gray-800
                                    @endif">
                                    {{ ucfirst(str_replace('_', ' ', $cn->status)) }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm font-semibold" style="color: #1E3A5F;">Rs. {{ number_format($cn->total_amount, 2) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-4 py-8 text-center">
                                <div class="empty-state">
                                    <div class="empty-state-icon">
                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" style="color: #9CA3AF;">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <p class="empty-state-text">No consignment notes found</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Invoices -->
        <div class="dashboard-widget">
            <div class="dashboard-widget-header">
                <div class="flex items-center justify-between">
                    <span>Recent Invoices</span>
                    <a href="{{ route('s2e.invoices.index') }}" class="text-xs font-normal hover:underline" style="color: #FF6B35;">
                        View All →
                    </a>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium" style="color: #6B7280;">Invoice #</th>
                            <th class="px-4 py-3 text-left text-xs font-medium" style="color: #6B7280;">Party</th>
                            <th class="px-4 py-3 text-left text-xs font-medium" style="color: #6B7280;">Date</th>
                            <th class="px-4 py-3 text-left text-xs font-medium" style="color: #6B7280;">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentInvoices ?? [] as $invoice)
                        <tr class="border-t" style="border-color: #E5E7EB;">
                            <td class="px-4 py-3">
                                <a href="{{ route('s2e.invoices.index') }}" class="font-medium hover:underline" style="color: #FF6B35;">
                                    {{ $invoice->invoice_number }}
                                </a>
                            </td>
                            <td class="px-4 py-3 text-sm" style="color: #6B7280;">{{ $invoice->party->name ?? 'N/A' }}</td>
                            <td class="px-4 py-3 text-sm" style="color: #6B7280;">{{ $invoice->invoice_date ? $invoice->invoice_date->format('d M Y') : 'N/A' }}</td>
                            <td class="px-4 py-3 text-sm font-semibold" style="color: #1E3A5F;">Rs. {{ number_format($invoice->grand_total, 2) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-4 py-8 text-center">
                                <div class="empty-state">
                                    <div class="empty-state-icon">
                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" style="color: #9CA3AF;">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <p class="empty-state-text">No invoices found</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Top Parties -->
    @if(isset($topParties) && $topParties->count() > 0)
    <div class="dashboard-widget mb-8">
        <div class="dashboard-widget-header">Top Parties by CNs</div>
        <div class="p-6">
            <div class="space-y-4">
                @foreach($topParties as $item)
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold" style="background: linear-gradient(135deg, rgba(255, 107, 53, 0.1), rgba(255, 140, 102, 0.1)); color: #FF6B35;">
                            {{ $loop->iteration }}
                        </div>
                        <div>
                            <p class="font-medium" style="color: #1E3A5F;">{{ $item->party->name ?? 'N/A' }}</p>
                            <p class="text-xs" style="color: #6B7280;">{{ $item->cn_count }} CNs</p>
                        </div>
                    </div>
                    <span class="text-sm font-medium" style="color: #6B7280;">
                        {{ $item->cn_count }} CNs
                    </span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
