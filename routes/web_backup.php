<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\S2ELogistics\ConsignmentNoteController;
use App\Http\Controllers\S2ELogistics\LoadPlanController;
use App\Http\Controllers\S2ELogistics\DeliverySheetController;
use App\Http\Controllers\S2ELogistics\PickupSheetController;
use App\Http\Controllers\S2ELogistics\InvoiceController;
use App\Http\Controllers\S2ELogistics\InitialSetupController;
use App\Http\Controllers\Finance\ChartOfAccountController;
use App\Http\Controllers\Finance\VoucherController;
use App\Http\Controllers\Finance\FinanceController;
use App\Http\Controllers\Payroll\EmployeeController;
use App\Http\Controllers\Payroll\PayrollController;
use App\Http\Controllers\Payroll\DepartmentController;
use App\Http\Controllers\Payroll\DesignationController;
use App\Http\Controllers\Reports\ReportsController;
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

    // S2E Logistics - Initial Setup
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

    // S2E Logistics - CN Entry
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
    });

    // Logistics Reports
    Route::prefix('reports')->name('reports.')->group(function () {
        Route::get('/sales', [ReportsController::class, 'sales'])->name('sales');
        Route::get('/profit-loss', [ReportsController::class, 'profitLoss'])->name('profit-loss');
        Route::get('/cn-status', [ReportsController::class, 'cnStatus'])->name('cn-status');
        Route::get('/control-lists', [ReportsController::class, 'controlLists'])->name('control-lists');
        Route::get('/cod', [ReportsController::class, 'codReports'])->name('cod');
    });

    // Finance Module
    Route::prefix('finance')->name('finance.')->group(function () {
        Route::resource('chart-of-accounts', ChartOfAccountController::class);
        Route::resource('vouchers', VoucherController::class);
        Route::post('vouchers/{voucher}/post', [VoucherController::class, 'post'])->name('vouchers.post');
        Route::post('vouchers/{voucher}/unpost', [VoucherController::class, 'unpost'])->name('vouchers.unpost');
        Route::get('/trial-balance', [FinanceController::class, 'trialBalance'])->name('trial-balance');
        Route::get('/balance-sheet', [FinanceController::class, 'balanceSheet'])->name('balance-sheet');
        Route::get('/profit-loss', [FinanceController::class, 'profitLoss'])->name('profit-loss');
        Route::get('/party-outstanding', [FinanceController::class, 'partyOutstanding'])->name('party-outstanding');
    });

    // Payroll Section
    Route::prefix('payroll')->name('payroll.')->group(function () {
        Route::get('departments', [DepartmentController::class, 'index'])->name('departments.index');
        Route::get('designations', [DesignationController::class, 'index'])->name('designations.index');
        Route::resource('employees', EmployeeController::class);
        Route::match(['get', 'post'], '/process', [PayrollController::class, 'process'])->name('process');
        Route::get('/registers', [PayrollController::class, 'registers'])->name('registers');
    });

    // Settings & Security
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::get('/audit-logs', [SettingsController::class, 'auditLogs'])->name('audit-logs');
    });
});

