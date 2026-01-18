<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'S2E Logistics ERP')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .submenu-group:hover .submenu-items {
            display: block !important;
        }
        /* S2E Brand Colors - Applied Globally - Using ONLY Logo Colors */
        
        /* Navigation Bar - Dark Blue (#1E3A5F) */
        .bg-blue-900 { background-color: #1E3A5F !important; }
        .bg-blue-800 { background-color: #152A47 !important; }
        .hover\:bg-blue-800:hover { background-color: #152A47 !important; }
        
        /* Buttons & Primary Actions - Orange (#FF6B35) */
        .bg-blue-600 { background-color: #FF6B35 !important; }
        .bg-blue-700 { background-color: #E55A2B !important; }
        .hover\:bg-blue-700:hover { background-color: #E55A2B !important; }
        
        /* Links - Orange (#FF6B35) */
        .text-blue-600 { color: #FF6B35 !important; }
        .text-blue-700 { color: #E55A2B !important; }
        .hover\:text-blue-900:hover { color: #E55A2B !important; }
        
        /* Focus States - Orange */
        .focus\:ring-blue-500:focus { --tw-ring-color: #FF6B35 !important; }
        .focus\:border-blue-500:focus { border-color: #FF6B35 !important; }
        .border-blue-500 { border-color: #FF6B35 !important; }
        
        /* Success Messages - Orange */
        .bg-green-600 { background-color: #FF6B35 !important; }
        .bg-green-100 { background-color: rgba(255, 140, 102, 0.2) !important; }
        .text-green-800 { color: #E55A2B !important; }
        .border-green-400 { border-color: #FF6B35 !important; }
        
        /* Tables - Brand Grays */
        .bg-gray-50 { background-color: #F3F4F6 !important; }
        .bg-gray-100 { background-color: #E5E7EB !important; }
        .text-gray-500 { color: #6B7280 !important; }
        .text-gray-600 { color: #6B7280 !important; }
        .text-gray-700 { color: #4B5563 !important; }
        .text-gray-800 { color: #4B5563 !important; }
        .text-gray-900 { color: #4B5563 !important; }
        
        /* Status Badges - Orange variants */
        .bg-blue-100 { background-color: rgba(255, 107, 53, 0.2) !important; }
        .text-blue-800 { color: #E55A2B !important; }
        
        /* ============================================
           INPUT FIELD VISIBILITY FIX - GLOBAL STYLES
           ============================================ */
        
        /* All Input Fields - Always Visible */
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        input[type="tel"],
        input[type="url"],
        input[type="search"],
        input[type="date"],
        input[type="datetime-local"],
        input[type="time"],
        input[type="month"],
        input[type="week"],
        textarea,
        select {
            background-color: #FFFFFF !important;
            border: 1px solid #D1D5DB !important;
            border-radius: 0.375rem;
            padding: 0.5rem 0.75rem !important;
            color: #1F2937 !important;
            font-size: 0.875rem;
            line-height: 1.5;
            width: 100%;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        
        /* Input Fields - Focus State */
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="number"]:focus,
        input[type="tel"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="date"]:focus,
        input[type="datetime-local"]:focus,
        input[type="time"]:focus,
        input[type="month"]:focus,
        input[type="week"]:focus,
        textarea:focus,
        select:focus {
            outline: none !important;
            border-color: #FF6B35 !important;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1) !important;
        }
        
        /* Input Fields - Hover State */
        input[type="text"]:hover,
        input[type="email"]:hover,
        input[type="password"]:hover,
        input[type="number"]:hover,
        input[type="tel"]:hover,
        input[type="url"]:hover,
        input[type="search"]:hover,
        input[type="date"]:hover,
        input[type="datetime-local"]:hover,
        input[type="time"]:hover,
        input[type="month"]:hover,
        input[type="week"]:hover,
        textarea:hover,
        select:hover {
            border-color: #9CA3AF !important;
        }
        
        /* Disabled Input Fields */
        input:disabled,
        textarea:disabled,
        select:disabled {
            background-color: #F3F4F6 !important;
            border-color: #E5E7EB !important;
            color: #6B7280 !important;
            cursor: not-allowed;
        }
        
        /* Placeholder Text */
        input::placeholder,
        textarea::placeholder {
            color: #9CA3AF !important;
            opacity: 1;
        }
        
        /* Select Dropdowns - Special Styling */
        select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem !important;
            appearance: none;
        }
        
        /* Textarea - Special Styling */
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        
        /* File Input */
        input[type="file"] {
            padding: 0.5rem !important;
            border: 1px solid #D1D5DB !important;
            border-radius: 0.375rem;
            background-color: #FFFFFF !important;
        }
        
        /* Checkbox and Radio - Visible Borders */
        input[type="checkbox"],
        input[type="radio"] {
            width: 1rem;
            height: 1rem;
            border: 2px solid #D1D5DB !important;
            background-color: #FFFFFF !important;
        }
        
        input[type="checkbox"]:checked,
        input[type="radio"]:checked {
            background-color: #FF6B35 !important;
            border-color: #FF6B35 !important;
        }
        
        /* Range Input */
        input[type="range"] {
            height: 0.5rem;
            background-color: #E5E7EB;
            border-radius: 0.25rem;
        }
        
        input[type="range"]::-webkit-slider-thumb {
            background-color: #FF6B35;
            border: 2px solid #FFFFFF;
        }
        
        input[type="range"]::-moz-range-thumb {
            background-color: #FF6B35;
            border: 2px solid #FFFFFF;
        }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
    <div class="flex-grow">
        <!-- Top Navigation -->
        <nav class="bg-blue-900 text-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}" class="flex items-center">
                                <img src="{{ asset('images/logo/s2e-logo.svg') }}" alt="S2E Logistics" class="h-12 w-auto">
                            </a>
                        </div>
                        <div class="hidden md:ml-6 md:flex md:space-x-8">
                            <!-- S2E Logistics Menu -->
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                    S2E Logistics
                                </button>
                                <div class="hidden group-hover:block absolute top-full left-0 mt-1 w-80 bg-white text-gray-800 rounded-md shadow-lg z-50">
                                    <!-- Initial Setup -->
                                    <div class="relative submenu-group">
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 flex items-center justify-between">
                                            <span>Initial Setup</span>
                                            <span class="ml-2">›</span>
                                        </a>
                                        <div class="hidden submenu-items absolute left-full top-0 ml-1 w-64 bg-white rounded-md shadow-lg border border-gray-200">
                                            <a href="{{ route('initial-setup.item-codes.index') }}" class="block px-4 py-2 hover:bg-gray-100">Item Codes</a>
                                            <a href="{{ route('initial-setup.invoice-charges.index') }}" class="block px-4 py-2 hover:bg-gray-100">Invoice Charges</a>
                                            <a href="{{ route('initial-setup.cargo-officers.index') }}" class="block px-4 py-2 hover:bg-gray-100">SPO / Cargo Officers</a>
                                            <a href="{{ route('initial-setup.cn-stock.index') }}" class="block px-4 py-2 hover:bg-gray-100">Cargo Office-wise CN Stock Issue</a>
                                            <a href="{{ route('initial-setup.cities.index') }}" class="block px-4 py-2 hover:bg-gray-100">City Codes</a>
                                            <a href="{{ route('initial-setup.zones.index') }}" class="block px-4 py-2 hover:bg-gray-100">Zone Codes</a>
                                            <a href="{{ route('initial-setup.party-rates.index') }}" class="block px-4 py-2 hover:bg-gray-100">Party or Area-wise Rate</a>
                                        </div>
                                    </div>
                                    <a href="{{ route('s2e.cn-entry.index') }}" class="block px-4 py-2 hover:bg-gray-100">C/N Entry</a>
                                    <a href="{{ route('s2e.load-plans.index') }}" class="block px-4 py-2 hover:bg-gray-100">Vehicle Load Plan</a>
                                    <a href="{{ route('s2e.delivery-sheets.index') }}" class="block px-4 py-2 hover:bg-gray-100">Delivery Sheet</a>
                                    <a href="{{ route('s2e.pickup-sheets.index') }}" class="block px-4 py-2 hover:bg-gray-100">Pickup Sheet</a>
                                    <a href="{{ route('s2e.invoices.index') }}" class="block px-4 py-2 hover:bg-gray-100">Invoices</a>
                                    <a href="{{ route('s2e.party-fuel-rates.index') }}" class="block px-4 py-2 hover:bg-gray-100">Party Fuel Rates for CN</a>
                                </div>
                            </div>
                            <!-- Logistics Reports -->
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                    Logistics Reports
                                </button>
                                <div class="hidden group-hover:block absolute top-full left-0 mt-1 w-80 bg-white text-gray-800 rounded-md shadow-lg z-50">
                                    <!-- Sales Reports -->
                                    <div class="relative submenu-group">
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 flex items-center justify-between">
                                            <span>Sales Reports</span>
                                            <span class="ml-2">›</span>
                                        </a>
                                        <div class="hidden submenu-items absolute left-full top-0 ml-1 w-72 bg-white rounded-md shadow-lg border border-gray-200">
                                            <a href="{{ route('reports.sales.cn-detail') }}" class="block px-4 py-2 hover:bg-gray-100">CN Detail</a>
                                            <a href="{{ route('reports.sales.list-invoices') }}" class="block px-4 py-2 hover:bg-gray-100">List of Invoices</a>
                                            <a href="{{ route('reports.sales.cn-status') }}" class="block px-4 py-2 hover:bg-gray-100">CN Status</a>
                                            <a href="{{ route('reports.sales.cn-profit-loss') }}" class="block px-4 py-2 hover:bg-gray-100">CN Profit / Loss</a>
                                            <a href="{{ route('reports.sales.city-profit-loss') }}" class="block px-4 py-2 hover:bg-gray-100">City-wise Profit / Loss</a>
                                            <a href="{{ route('reports.sales.shipper-profit-loss') }}" class="block px-4 py-2 hover:bg-gray-100">Shipper-wise Profit / Loss</a>
                                            <a href="{{ route('reports.sales.hub-profit-loss') }}" class="block px-4 py-2 hover:bg-gray-100">Hub-wise Profit / Loss</a>
                                            <a href="{{ route('reports.sales.spo-profit-loss') }}" class="block px-4 py-2 hover:bg-gray-100">SPO-wise Profit / Loss</a>
                                            <a href="{{ route('reports.sales.hub-cn-detail') }}" class="block px-4 py-2 hover:bg-gray-100">Hub-wise CN Detail</a>
                                            <a href="{{ route('reports.sales.transporter-documents') }}" class="block px-4 py-2 hover:bg-gray-100">Transporter-wise Documents Detail</a>
                                            <a href="{{ route('reports.sales.zone-profit-loss') }}" class="block px-4 py-2 hover:bg-gray-100">Zone-wise Profit / Loss</a>
                                        </div>
                                    </div>
                                    <!-- Edit Lists -->
                                    <div class="relative submenu-group">
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 flex items-center justify-between">
                                            <span>Edit Lists</span>
                                            <span class="ml-2">›</span>
                                        </a>
                                        <div class="hidden submenu-items absolute left-full top-0 ml-1 w-72 bg-white rounded-md shadow-lg border border-gray-200">
                                            <a href="{{ route('reports.edit-lists.spo-cn-stock') }}" class="block px-4 py-2 hover:bg-gray-100">SPO-wise CN Stock Issue List</a>
                                            <a href="{{ route('reports.edit-lists.missing-sn') }}" class="block px-4 py-2 hover:bg-gray-100">List of Missing SN Numbers</a>
                                            <a href="{{ route('reports.edit-lists.pending-invoices') }}" class="block px-4 py-2 hover:bg-gray-100">List of Pending Invoices</a>
                                            <a href="{{ route('reports.edit-lists.item-codes') }}" class="block px-4 py-2 hover:bg-gray-100">List of Item Codes</a>
                                            <a href="{{ route('reports.edit-lists.city-codes') }}" class="block px-4 py-2 hover:bg-gray-100">List of City Codes</a>
                                            <a href="{{ route('reports.edit-lists.city-hub-list') }}" class="block px-4 py-2 hover:bg-gray-100">City Code Hub-wise List</a>
                                            <a href="{{ route('reports.edit-lists.vehicle-types') }}" class="block px-4 py-2 hover:bg-gray-100">List of Vehicle Types</a>
                                            <a href="{{ route('reports.edit-lists.spo-officers') }}" class="block px-4 py-2 hover:bg-gray-100">List of SPO / Cargo Officers</a>
                                            <a href="{{ route('reports.edit-lists.rates') }}" class="block px-4 py-2 hover:bg-gray-100">List of Rates</a>
                                            <a href="{{ route('reports.edit-lists.party-fuel-rates') }}" class="block px-4 py-2 hover:bg-gray-100">Party-wise Fuel Rate List</a>
                                        </div>
                                    </div>
                                    <!-- Other Reports -->
                                    <div class="relative submenu-group">
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 flex items-center justify-between">
                                            <span>Other Reports</span>
                                            <span class="ml-2">›</span>
                                        </a>
                                        <div class="hidden submenu-items absolute left-full top-0 ml-1 w-72 bg-white rounded-md shadow-lg border border-gray-200">
                                            <a href="{{ route('reports.other.delivery-cn-detail') }}" class="block px-4 py-2 hover:bg-gray-100">Delivery CN Detail</a>
                                            <a href="{{ route('reports.other.group-outstanding') }}" class="block px-4 py-2 hover:bg-gray-100">Group / Party Outstanding with Sales Tax</a>
                                            <a href="{{ route('reports.other.sales-tax-invoices') }}" class="block px-4 py-2 hover:bg-gray-100">List of Invoices (Sales Tax Invoice)</a>
                                            <a href="{{ route('reports.other.cn-detail-cod') }}" class="block px-4 py-2 hover:bg-gray-100">CN Detail Account (COD)</a>
                                            <a href="{{ route('reports.other.delivery-sheet-cod') }}" class="block px-4 py-2 hover:bg-gray-100">Delivery Sheet COD Detail</a>
                                            <a href="{{ route('reports.other.cod-status') }}" class="block px-4 py-2 hover:bg-gray-100">CN Detail Account COD Status</a>
                                            <a href="{{ route('reports.other.stock-in-transit') }}" class="block px-4 py-2 hover:bg-gray-100">Stock In Transit</a>
                                            <a href="{{ route('reports.other.cn-in-stock') }}" class="block px-4 py-2 hover:bg-gray-100">CN In Stock</a>
                                            <a href="{{ route('reports.other.non-service-charges') }}" class="block px-4 py-2 hover:bg-gray-100">Non-Service Charges on CN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Finance Menu -->
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                    Finance
                                </button>
                                <div class="hidden group-hover:block absolute top-full left-0 mt-1 w-80 bg-white text-gray-800 rounded-md shadow-lg z-50 max-h-96 overflow-y-auto">
                                    <a href="{{ route('finance.group-codes.index') }}" class="block px-4 py-2 hover:bg-gray-100">Group Codes</a>
                                    <a href="{{ route('finance.control-codes.index') }}" class="block px-4 py-2 hover:bg-gray-100">Control Codes</a>
                                    <a href="{{ route('finance.chart-of-accounts.index') }}" class="block px-4 py-2 hover:bg-gray-100">Chart of Accounts</a>
                                    <a href="{{ route('finance.account-grouping.index') }}" class="block px-4 py-2 hover:bg-gray-100">Account Grouping</a>
                                    <a href="{{ route('finance.vouchers.create', ['type' => 'bpv']) }}" class="block px-4 py-2 hover:bg-gray-100">BPV – Bank Payment Voucher</a>
                                    <a href="{{ route('finance.vouchers.create', ['type' => 'brv']) }}" class="block px-4 py-2 hover:bg-gray-100">BRV – Bank Receipt Voucher</a>
                                    <a href="{{ route('finance.vouchers.create', ['type' => 'cpv']) }}" class="block px-4 py-2 hover:bg-gray-100">CPV – Cash Payment Voucher</a>
                                    <a href="{{ route('finance.vouchers.create', ['type' => 'crv']) }}" class="block px-4 py-2 hover:bg-gray-100">CRV – Cash Receipt Voucher</a>
                                    <a href="{{ route('finance.vouchers.create', ['type' => 'jvr']) }}" class="block px-4 py-2 hover:bg-gray-100">JVR – Journal Voucher</a>
                                    <a href="{{ route('finance.balance-sheet') }}" class="block px-4 py-2 hover:bg-gray-100">Balance Sheet</a>
                                    <a href="{{ route('finance.profit-loss') }}" class="block px-4 py-2 hover:bg-gray-100">Profit & Loss</a>
                                    <a href="{{ route('finance.change-voucher-date') }}" class="block px-4 py-2 hover:bg-gray-100">Change Voucher Date</a>
                                    <a href="{{ route('finance.list-chart-of-accounts') }}" class="block px-4 py-2 hover:bg-gray-100">List of Chart of Accounts</a>
                                    <a href="{{ route('finance.list-vouchers') }}" class="block px-4 py-2 hover:bg-gray-100">List of Vouchers</a>
                                    <a href="{{ route('finance.cn-expenses') }}" class="block px-4 py-2 hover:bg-gray-100">CN-wise Expenses Detail</a>
                                    <a href="{{ route('finance.trial-balance') }}" class="block px-4 py-2 hover:bg-gray-100">Trial Balance</a>
                                    <a href="{{ route('finance.master-schedule') }}" class="block px-4 py-2 hover:bg-gray-100">Master Schedule</a>
                                    <a href="{{ route('finance.accounts-ledger') }}" class="block px-4 py-2 hover:bg-gray-100">Accounts Ledger</a>
                                    <a href="{{ route('finance.profit-loss-comparative') }}" class="block px-4 py-2 hover:bg-gray-100">Profit & Loss (Comparative)</a>
                                    <a href="{{ route('finance.month-closing-balance') }}" class="block px-4 py-2 hover:bg-gray-100">Month-wise Closing Balance Break-up</a>
                                    <a href="{{ route('finance.group-outstanding') }}" class="block px-4 py-2 hover:bg-gray-100">Group Outstanding Detail</a>
                                    <a href="{{ route('finance.group-ledger') }}" class="block px-4 py-2 hover:bg-gray-100">Group Ledger</a>
                                    <a href="{{ route('finance.trial-balance-console') }}" class="block px-4 py-2 hover:bg-gray-100">Trial Balance (Console)</a>
                                    <a href="{{ route('finance.master-schedule-console') }}" class="block px-4 py-2 hover:bg-gray-100">Master Schedule (Console)</a>
                                    <a href="{{ route('finance.accounts-ledger-console') }}" class="block px-4 py-2 hover:bg-gray-100">Accounts Ledger (Console)</a>
                                    <a href="{{ route('finance.pl-comparative-console') }}" class="block px-4 py-2 hover:bg-gray-100">P/L Comparative (Console)</a>
                                    <a href="{{ route('finance.account-grouping-detail') }}" class="block px-4 py-2 hover:bg-gray-100">Account Grouping Detail</a>
                                    <a href="{{ route('finance.sales-tax-register-invoice') }}" class="block px-4 py-2 hover:bg-gray-100">Sales Tax Register (Invoice-wise)</a>
                                    <a href="{{ route('finance.sales-tax-register-customer') }}" class="block px-4 py-2 hover:bg-gray-100">Sales Tax Register (Customer-wise)</a>
                                    <a href="{{ route('finance.party-outstanding-detailed') }}" class="block px-4 py-2 hover:bg-gray-100">Party-wise Outstanding Detailed</a>
                                    <a href="{{ route('finance.party-outstanding-aging') }}" class="block px-4 py-2 hover:bg-gray-100">Party-wise Outstanding (Aging)</a>
                                    <a href="{{ route('finance.party-cleared-outstanding') }}" class="block px-4 py-2 hover:bg-gray-100">Party-wise Cleared & Outstanding Detail</a>
                                </div>
                            </div>
                            <!-- Finance Reports -->
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                    Finance Reports
                                </button>
                                <div class="hidden group-hover:block absolute top-full left-0 mt-1 w-64 bg-white text-gray-800 rounded-md shadow-lg z-50">
                                    <a href="{{ route('finance.trial-balance') }}" class="block px-4 py-2 hover:bg-gray-100">Trial Balance</a>
                                    <a href="{{ route('finance.balance-sheet') }}" class="block px-4 py-2 hover:bg-gray-100">Balance Sheet</a>
                                    <a href="{{ route('finance.profit-loss') }}" class="block px-4 py-2 hover:bg-gray-100">Profit & Loss</a>
                                    <a href="{{ route('finance.party-outstanding') }}" class="block px-4 py-2 hover:bg-gray-100">Party Outstanding</a>
                                </div>
                            </div>
                            <!-- Payroll Section -->
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                    Payroll Section
                                </button>
                                <div class="hidden group-hover:block absolute top-full left-0 mt-1 w-80 bg-white text-gray-800 rounded-md shadow-lg z-50">
                                    <a href="{{ route('payroll.departments.index') }}" class="block px-4 py-2 hover:bg-gray-100">Department Codes</a>
                                    <a href="{{ route('payroll.designations.index') }}" class="block px-4 py-2 hover:bg-gray-100">Designation Codes</a>
                                    <a href="{{ route('payroll.employees.index') }}" class="block px-4 py-2 hover:bg-gray-100">Employee Master File</a>
                                    <a href="{{ route('payroll.loans.index') }}" class="block px-4 py-2 hover:bg-gray-100">Loan Master File</a>
                                    <a href="{{ route('payroll.deductions-allowances.index') }}" class="block px-4 py-2 hover:bg-gray-100">Monthly Deduction / Allowances</a>
                                    <a href="{{ route('payroll.authorized-leaves.index') }}" class="block px-4 py-2 hover:bg-gray-100">Authorized Leaves</a>
                                    <a href="{{ route('payroll.process') }}" class="block px-4 py-2 hover:bg-gray-100">Monthly Payroll Processing</a>
                                    <a href="{{ route('payroll.list-employees') }}" class="block px-4 py-2 hover:bg-gray-100">List of Employees</a>
                                    <a href="{{ route('payroll.list-monthly-payroll') }}" class="block px-4 py-2 hover:bg-gray-100">List of Monthly Payroll</a>
                                    <a href="{{ route('payroll.list-deductions-allowances') }}" class="block px-4 py-2 hover:bg-gray-100">Deduction / Allowances List</a>
                                    <a href="{{ route('payroll.authorized-leaves-detail') }}" class="block px-4 py-2 hover:bg-gray-100">Employee Authorized Leaves Detail</a>
                                    <a href="{{ route('payroll.leave-status') }}" class="block px-4 py-2 hover:bg-gray-100">Employee Leave Status</a>
                                    <a href="{{ route('payroll.department-register') }}" class="block px-4 py-2 hover:bg-gray-100">Department-wise Payroll Register</a>
                                </div>
                            </div>
                            <!-- Settings -->
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-800">
                                    Settings
                                </button>
                                <div class="hidden group-hover:block absolute top-full left-0 mt-1 w-80 bg-white text-gray-800 rounded-md shadow-lg z-50">
                                    <a href="{{ route('settings.users.index') }}" class="block px-4 py-2 hover:bg-gray-100">Users</a>
                                    <a href="{{ route('settings.roles.index') }}" class="block px-4 py-2 hover:bg-gray-100">User Roles</a>
                                    <a href="{{ route('settings.change-password') }}" class="block px-4 py-2 hover:bg-gray-100">Change Password</a>
                                    <a href="{{ route('settings.change-year') }}" class="block px-4 py-2 hover:bg-gray-100">Change Year</a>
                                    <a href="{{ route('settings.initialize-data') }}" class="block px-4 py-2 hover:bg-gray-100">Initialize Data for Re-processing</a>
                                    <a href="{{ route('settings.data-processing') }}" class="block px-4 py-2 hover:bg-gray-100">Data Processing</a>
                                    <a href="{{ route('settings.payroll-processing-final') }}" class="block px-4 py-2 hover:bg-gray-100">Payroll Processing (FINAL)</a>
                                    <a href="{{ route('settings.system-optimization') }}" class="block px-4 py-2 hover:bg-gray-100">System Optimization</a>
                                    <a href="{{ route('settings.un-void-cn') }}" class="block px-4 py-2 hover:bg-gray-100">Un-Void CN</a>
                                    <a href="{{ route('settings.email-settings') }}" class="block px-4 py-2 hover:bg-gray-100">Email Settings</a>
                                    <a href="{{ route('settings.inter-branch-jv-code') }}" class="block px-4 py-2 hover:bg-gray-100">Inter-Branch JV Code</a>
                                    <a href="{{ route('settings.unpost-data') }}" class="block px-4 py-2 hover:bg-gray-100">Un-Post Data with Date Range</a>
                                </div>
                            </div>
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
                <div class="mb-4 px-4 py-3 rounded" style="background-color: rgba(255, 140, 102, 0.2); border: 1px solid #FF6B35; color: #E55A2B;">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-4 px-4 py-3 rounded" style="background-color: rgba(107, 114, 128, 0.2); border: 1px solid #6B7280; color: #4B5563;">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
    
    <!-- Global Footer -->
    @include('components.footer')
</body>
</html>

