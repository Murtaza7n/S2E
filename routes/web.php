<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\S2ELogistics\ConsignmentNoteController;
use App\Http\Controllers\S2ELogistics\LoadPlanController;
use App\Http\Controllers\S2ELogistics\DeliverySheetController;
use App\Http\Controllers\S2ELogistics\PickupSheetController;
use App\Http\Controllers\S2ELogistics\InvoiceController;
use App\Http\Controllers\S2ELogistics\InitialSetupController;
use App\Http\Controllers\S2ELogistics\PartyFuelRateController;
use App\Http\Controllers\Finance\ChartOfAccountController;
use App\Http\Controllers\Finance\VoucherController;
use App\Http\Controllers\Finance\FinanceController;
use App\Http\Controllers\Finance\GroupCodeController;
use App\Http\Controllers\Finance\ControlCodeController;
use App\Http\Controllers\Finance\AccountGroupingController;
use App\Http\Controllers\Payroll\EmployeeController;
use App\Http\Controllers\Payroll\PayrollController;
use App\Http\Controllers\Payroll\DepartmentController;
use App\Http\Controllers\Payroll\DesignationController;
use App\Http\Controllers\Payroll\LoanController;
use App\Http\Controllers\Payroll\DeductionAllowanceController;
use App\Http\Controllers\Payroll\AuthorizedLeaveController;
use App\Http\Controllers\Reports\ReportsController;
use App\Http\Controllers\Reports\SalesReportsController;
use App\Http\Controllers\Reports\EditListsController;
use App\Http\Controllers\Reports\OtherReportsController;
use App\Http\Controllers\Settings\UserController;
use App\Http\Controllers\Settings\RoleController;
use App\Http\Controllers\Settings\PermissionController;
use App\Http\Controllers\Settings\SettingsController;
use Illuminate\Support\Facades\Route;

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // ============================================
    // S2E LOGISTICS MENU
    // ============================================
    
    // Initial Setup
    Route::prefix('s2e-logistics/initial-setup')->name('initial-setup.')->group(function () {
        Route::get('item-codes', [InitialSetupController::class, 'itemCodesIndex'])->name('item-codes.index');
        Route::post('item-codes', [InitialSetupController::class, 'itemCodesStore'])->name('item-codes.store');
        Route::get('invoice-charges', [InitialSetupController::class, 'invoiceChargesIndex'])->name('invoice-charges.index');
        Route::get('cargo-officers', [InitialSetupController::class, 'cargoOfficersIndex'])->name('cargo-officers.index');
        Route::get('cn-stock', [InitialSetupController::class, 'cnStockIndex'])->name('cn-stock.index');
        Route::get('cities', [InitialSetupController::class, 'citiesIndex'])->name('cities.index');
        Route::get('zones', [InitialSetupController::class, 'zonesIndex'])->name('zones.index');
        Route::get('party-rates', [InitialSetupController::class, 'partyRatesIndex'])->name('party-rates.index');
    });

    // S2E Logistics Operations
    Route::prefix('s2e-logistics')->name('s2e.')->group(function () {
        Route::resource('cn-entry', ConsignmentNoteController::class);
        Route::resource('load-plans', LoadPlanController::class);
        Route::post('load-plans/{loadPlan}/dispatch', [LoadPlanController::class, 'dispatch'])->name('load-plans.dispatch');
        Route::post('load-plans/{loadPlan}/receive', [LoadPlanController::class, 'receive'])->name('load-plans.receive');
        Route::resource('delivery-sheets', DeliverySheetController::class);
        Route::post('delivery-sheets/{deliverySheet}/mark-delivered/{cn}', [DeliverySheetController::class, 'markDelivered'])->name('delivery-sheets.mark-delivered');
        Route::post('delivery-sheets/{deliverySheet}/mark-returned/{cn}', [DeliverySheetController::class, 'markReturned'])->name('delivery-sheets.mark-returned');
        Route::resource('pickup-sheets', PickupSheetController::class);
        Route::post('pickup-sheets/{pickupSheet}/mark-picked/{cn}', [PickupSheetController::class, 'markPicked'])->name('pickup-sheets.mark-picked');
        Route::resource('invoices', InvoiceController::class);
        Route::post('invoices/{invoice}/post', [InvoiceController::class, 'post'])->name('invoices.post');
        Route::resource('party-fuel-rates', PartyFuelRateController::class);
    });

    // ============================================
    // LOGISTICS REPORTS MENU
    // ============================================
    
    Route::prefix('reports')->name('reports.')->group(function () {
        // Sales Reports
        Route::prefix('sales')->name('sales.')->group(function () {
            Route::get('cn-detail', [SalesReportsController::class, 'cnDetail'])->name('cn-detail');
            Route::get('list-invoices', [SalesReportsController::class, 'listInvoices'])->name('list-invoices');
            Route::get('cn-status', [SalesReportsController::class, 'cnStatus'])->name('cn-status');
            Route::get('cn-profit-loss', [SalesReportsController::class, 'cnProfitLoss'])->name('cn-profit-loss');
            Route::get('city-profit-loss', [SalesReportsController::class, 'cityProfitLoss'])->name('city-profit-loss');
            Route::get('shipper-profit-loss', [SalesReportsController::class, 'shipperProfitLoss'])->name('shipper-profit-loss');
            Route::get('hub-profit-loss', [SalesReportsController::class, 'hubProfitLoss'])->name('hub-profit-loss');
            Route::get('spo-profit-loss', [SalesReportsController::class, 'spoProfitLoss'])->name('spo-profit-loss');
            Route::get('hub-cn-detail', [SalesReportsController::class, 'hubCnDetail'])->name('hub-cn-detail');
            Route::get('transporter-documents', [SalesReportsController::class, 'transporterDocuments'])->name('transporter-documents');
            Route::get('zone-profit-loss', [SalesReportsController::class, 'zoneProfitLoss'])->name('zone-profit-loss');
        });

        // Edit Lists
        Route::prefix('edit-lists')->name('edit-lists.')->group(function () {
            Route::get('spo-cn-stock', [EditListsController::class, 'spoCnStock'])->name('spo-cn-stock');
            Route::get('missing-sn', [EditListsController::class, 'missingSn'])->name('missing-sn');
            Route::get('pending-invoices', [EditListsController::class, 'pendingInvoices'])->name('pending-invoices');
            Route::get('item-codes', [EditListsController::class, 'itemCodes'])->name('item-codes');
            Route::get('city-codes', [EditListsController::class, 'cityCodes'])->name('city-codes');
            Route::get('city-hub-list', [EditListsController::class, 'cityHubList'])->name('city-hub-list');
            Route::get('vehicle-types', [EditListsController::class, 'vehicleTypes'])->name('vehicle-types');
            Route::get('spo-officers', [EditListsController::class, 'spoOfficers'])->name('spo-officers');
            Route::get('rates', [EditListsController::class, 'rates'])->name('rates');
            Route::get('party-fuel-rates', [EditListsController::class, 'partyFuelRates'])->name('party-fuel-rates');
        });

        // Other Reports
        Route::prefix('other')->name('other.')->group(function () {
            Route::get('delivery-cn-detail', [OtherReportsController::class, 'deliveryCnDetail'])->name('delivery-cn-detail');
            Route::get('group-outstanding', [OtherReportsController::class, 'groupOutstanding'])->name('group-outstanding');
            Route::get('sales-tax-invoices', [OtherReportsController::class, 'salesTaxInvoices'])->name('sales-tax-invoices');
            Route::get('cn-detail-cod', [OtherReportsController::class, 'cnDetailCod'])->name('cn-detail-cod');
            Route::get('delivery-sheet-cod', [OtherReportsController::class, 'deliverySheetCod'])->name('delivery-sheet-cod');
            Route::get('cod-status', [OtherReportsController::class, 'codStatus'])->name('cod-status');
            Route::get('stock-in-transit', [OtherReportsController::class, 'stockInTransit'])->name('stock-in-transit');
            Route::get('cn-in-stock', [OtherReportsController::class, 'cnInStock'])->name('cn-in-stock');
            Route::get('non-service-charges', [OtherReportsController::class, 'nonServiceCharges'])->name('non-service-charges');
        });
    });

    // ============================================
    // FINANCE MENU
    // ============================================
    
    Route::prefix('finance')->name('finance.')->group(function () {
        Route::resource('group-codes', GroupCodeController::class);
        Route::resource('control-codes', ControlCodeController::class);
        Route::resource('chart-of-accounts', ChartOfAccountController::class);
        Route::resource('account-grouping', AccountGroupingController::class);
        Route::resource('vouchers', VoucherController::class);
        Route::get('vouchers/create/{type}', [VoucherController::class, 'create'])->name('vouchers.create-type');
        Route::post('vouchers/{voucher}/post', [VoucherController::class, 'post'])->name('vouchers.post');
        Route::post('vouchers/{voucher}/unpost', [VoucherController::class, 'unpost'])->name('vouchers.unpost');
        Route::get('balance-sheet', [FinanceController::class, 'balanceSheet'])->name('balance-sheet');
        Route::get('profit-loss', [FinanceController::class, 'profitLoss'])->name('profit-loss');
        Route::get('change-voucher-date', [FinanceController::class, 'changeVoucherDate'])->name('change-voucher-date');
        Route::post('change-voucher-date', [FinanceController::class, 'updateVoucherDate'])->name('update-voucher-date');
        Route::get('list-chart-of-accounts', [FinanceController::class, 'listChartOfAccounts'])->name('list-chart-of-accounts');
        Route::get('list-vouchers', [FinanceController::class, 'listVouchers'])->name('list-vouchers');
        Route::get('cn-expenses', [FinanceController::class, 'cnExpenses'])->name('cn-expenses');
        Route::get('trial-balance', [FinanceController::class, 'trialBalance'])->name('trial-balance');
        Route::get('master-schedule', [FinanceController::class, 'masterSchedule'])->name('master-schedule');
        Route::get('accounts-ledger', [FinanceController::class, 'accountsLedger'])->name('accounts-ledger');
        Route::get('profit-loss-comparative', [FinanceController::class, 'profitLossComparative'])->name('profit-loss-comparative');
        Route::get('month-closing-balance', [FinanceController::class, 'monthClosingBalance'])->name('month-closing-balance');
        Route::get('group-outstanding', [FinanceController::class, 'groupOutstanding'])->name('group-outstanding');
        Route::get('group-ledger', [FinanceController::class, 'groupLedger'])->name('group-ledger');
        Route::get('trial-balance-console', [FinanceController::class, 'trialBalanceConsole'])->name('trial-balance-console');
        Route::get('master-schedule-console', [FinanceController::class, 'masterScheduleConsole'])->name('master-schedule-console');
        Route::get('accounts-ledger-console', [FinanceController::class, 'accountsLedgerConsole'])->name('accounts-ledger-console');
        Route::get('pl-comparative-console', [FinanceController::class, 'plComparativeConsole'])->name('pl-comparative-console');
        Route::get('account-grouping-detail', [FinanceController::class, 'accountGroupingDetail'])->name('account-grouping-detail');
        Route::get('sales-tax-register-invoice', [FinanceController::class, 'salesTaxRegisterInvoice'])->name('sales-tax-register-invoice');
        Route::get('sales-tax-register-customer', [FinanceController::class, 'salesTaxRegisterCustomer'])->name('sales-tax-register-customer');
        Route::get('party-outstanding-detailed', [FinanceController::class, 'partyOutstandingDetailed'])->name('party-outstanding-detailed');
        Route::get('party-outstanding-aging', [FinanceController::class, 'partyOutstandingAging'])->name('party-outstanding-aging');
        Route::get('party-cleared-outstanding', [FinanceController::class, 'partyClearedOutstanding'])->name('party-cleared-outstanding');
        Route::get('party-outstanding', [FinanceController::class, 'partyOutstanding'])->name('party-outstanding');
    });

    // ============================================
    // PAYROLL SECTION MENU
    // ============================================
    
    Route::prefix('payroll')->name('payroll.')->group(function () {
        Route::resource('departments', DepartmentController::class);
        Route::resource('designations', DesignationController::class);
        Route::resource('employees', EmployeeController::class);
        Route::resource('loans', LoanController::class);
        Route::resource('deductions-allowances', DeductionAllowanceController::class);
        Route::resource('authorized-leaves', AuthorizedLeaveController::class);
        Route::match(['get', 'post'], 'process', [PayrollController::class, 'process'])->name('process');
        Route::get('list-employees', [PayrollController::class, 'listEmployees'])->name('list-employees');
        Route::get('list-monthly-payroll', [PayrollController::class, 'listMonthlyPayroll'])->name('list-monthly-payroll');
        Route::get('list-deductions-allowances', [PayrollController::class, 'listDeductionsAllowances'])->name('list-deductions-allowances');
        Route::get('authorized-leaves-detail', [PayrollController::class, 'authorizedLeavesDetail'])->name('authorized-leaves-detail');
        Route::get('leave-status', [PayrollController::class, 'leaveStatus'])->name('leave-status');
        Route::get('department-register', [PayrollController::class, 'departmentRegister'])->name('department-register');
        Route::get('registers', [PayrollController::class, 'registers'])->name('registers');
    });

    // ============================================
    // SETTINGS MENU
    // ============================================
    
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::get('change-password', [SettingsController::class, 'changePassword'])->name('change-password');
        Route::post('change-password', [SettingsController::class, 'updatePassword'])->name('update-password');
        Route::get('change-year', [SettingsController::class, 'changeYear'])->name('change-year');
        Route::post('change-year', [SettingsController::class, 'updateYear'])->name('update-year');
        Route::get('initialize-data', [SettingsController::class, 'initializeData'])->name('initialize-data');
        Route::post('initialize-data', [SettingsController::class, 'processInitializeData'])->name('process-initialize-data');
        Route::get('data-processing', [SettingsController::class, 'dataProcessing'])->name('data-processing');
        Route::post('data-processing', [SettingsController::class, 'processData'])->name('process-data');
        Route::get('payroll-processing-final', [SettingsController::class, 'payrollProcessingFinal'])->name('payroll-processing-final');
        Route::post('payroll-processing-final', [SettingsController::class, 'processPayrollFinal'])->name('process-payroll-final');
        Route::get('system-optimization', [SettingsController::class, 'systemOptimization'])->name('system-optimization');
        Route::post('system-optimization', [SettingsController::class, 'runOptimization'])->name('run-optimization');
        Route::get('un-void-cn', [SettingsController::class, 'unVoidCn'])->name('un-void-cn');
        Route::post('un-void-cn', [SettingsController::class, 'processUnVoidCn'])->name('process-un-void-cn');
        Route::get('email-settings', [SettingsController::class, 'emailSettings'])->name('email-settings');
        Route::post('email-settings', [SettingsController::class, 'updateEmailSettings'])->name('update-email-settings');
        Route::get('inter-branch-jv-code', [SettingsController::class, 'interBranchJvCode'])->name('inter-branch-jv-code');
        Route::post('inter-branch-jv-code', [SettingsController::class, 'updateInterBranchJvCode'])->name('update-inter-branch-jv-code');
        Route::get('unpost-data', [SettingsController::class, 'unpostData'])->name('unpost-data');
        Route::post('unpost-data', [SettingsController::class, 'processUnpostData'])->name('process-unpost-data');
        Route::get('audit-logs', [SettingsController::class, 'auditLogs'])->name('audit-logs');
    });
});

