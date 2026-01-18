<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'S2E Logistics ERP')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Top Navigation -->
        <nav class="bg-blue-900 text-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <span class="text-xl font-bold">S2E Logistics ERP</span>
                        </div>
                        <div class="hidden md:ml-6 md:flex md:space-x-8">
                            <!-- S2E Logistics Menu -->
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                    S2E Logistics
                                </button>
                                <div class="hidden group-hover:block absolute top-full left-0 mt-1 w-64 bg-white text-gray-800 rounded-md shadow-lg z-50">
                                    <a href="{{ route('initial-setup.item-codes.index') }}" class="block px-4 py-2 hover:bg-gray-100">Initial Setup</a>
                                    <a href="{{ route('s2e.cn-entry.index') }}" class="block px-4 py-2 hover:bg-gray-100">CN Entry</a>
                                    <a href="{{ route('s2e.load-plans.index') }}" class="block px-4 py-2 hover:bg-gray-100">Vehicle Load Plan</a>
                                    <a href="{{ route('s2e.delivery-sheets.index') }}" class="block px-4 py-2 hover:bg-gray-100">Delivery Sheet</a>
                                    <a href="{{ route('s2e.pickup-sheets.index') }}" class="block px-4 py-2 hover:bg-gray-100">Pickup Sheet</a>
                                    <a href="{{ route('s2e.invoices.index') }}" class="block px-4 py-2 hover:bg-gray-100">Invoices</a>
                                </div>
                            </div>
                            <!-- Logistics Reports -->
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                    Logistics Reports
                                </button>
                                <div class="hidden group-hover:block absolute top-full left-0 mt-1 w-64 bg-white text-gray-800 rounded-md shadow-lg z-50">
                                    <a href="{{ route('reports.sales') }}" class="block px-4 py-2 hover:bg-gray-100">Sales Reports</a>
                                    <a href="{{ route('reports.profit-loss') }}" class="block px-4 py-2 hover:bg-gray-100">Profit / Loss</a>
                                    <a href="{{ route('reports.cn-status') }}" class="block px-4 py-2 hover:bg-gray-100">CN Status & Stock</a>
                                    <a href="{{ route('reports.control-lists') }}" class="block px-4 py-2 hover:bg-gray-100">Control Lists</a>
                                </div>
                            </div>
                            <!-- Finance Module -->
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                    Finance
                                </button>
                                <div class="hidden group-hover:block absolute top-full left-0 mt-1 w-64 bg-white text-gray-800 rounded-md shadow-lg z-50">
                                    <a href="{{ route('finance.chart-of-accounts.index') }}" class="block px-4 py-2 hover:bg-gray-100">Chart of Accounts</a>
                                    <a href="{{ route('finance.vouchers.index') }}" class="block px-4 py-2 hover:bg-gray-100">Vouchers</a>
                                    <a href="{{ route('finance.trial-balance') }}" class="block px-4 py-2 hover:bg-gray-100">Trial Balance</a>
                                    <a href="{{ route('finance.balance-sheet') }}" class="block px-4 py-2 hover:bg-gray-100">Balance Sheet</a>
                                    <a href="{{ route('finance.profit-loss') }}" class="block px-4 py-2 hover:bg-gray-100">Profit & Loss</a>
                                </div>
                            </div>
                            <!-- Payroll -->
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                    Payroll
                                </button>
                                <div class="hidden group-hover:block absolute top-full left-0 mt-1 w-64 bg-white text-gray-800 rounded-md shadow-lg z-50">
                                    <a href="{{ route('payroll.departments.index') }}" class="block px-4 py-2 hover:bg-gray-100">Departments</a>
                                    <a href="{{ route('payroll.designations.index') }}" class="block px-4 py-2 hover:bg-gray-100">Designations</a>
                                    <a href="{{ route('payroll.employees.index') }}" class="block px-4 py-2 hover:bg-gray-100">Employees</a>
                                    <a href="{{ route('payroll.process') }}" class="block px-4 py-2 hover:bg-gray-100">Process Payroll</a>
                                </div>
                            </div>
                            <!-- Settings -->
                            <a href="{{ route('settings.users.index') }}" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                Settings
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="mr-4">{{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>

