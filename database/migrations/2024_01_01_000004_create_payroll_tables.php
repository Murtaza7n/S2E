<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Departments
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Designations
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Employees
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code')->unique();
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('cnic')->unique()->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('joining_date');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed'])->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_name')->nullable();
            
            $table->foreignId('department_id')->constrained('departments')->onDelete('restrict');
            $table->foreignId('designation_id')->constrained('designations')->onDelete('restrict');
            $table->foreignId('cargo_office_id')->nullable()->constrained('cargo_offices')->onDelete('set null');
            
            $table->decimal('basic_salary', 15, 2)->default(0);
            $table->enum('salary_type', ['monthly', 'daily', 'hourly'])->default('monthly');
            $table->enum('employment_type', ['permanent', 'contract', 'temporary'])->default('permanent');
            
            $table->boolean('is_active')->default(true);
            $table->date('leaving_date')->nullable();
            $table->text('leaving_reason')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });

        // Allowances
        Schema::create('allowances', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->enum('type', ['fixed', 'percentage'])->default('fixed');
            $table->decimal('amount', 15, 2)->default(0);
            $table->boolean('is_taxable')->default(true);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Deductions
        Schema::create('deductions', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->enum('type', ['fixed', 'percentage'])->default('fixed');
            $table->decimal('amount', 15, 2)->default(0);
            $table->boolean('is_taxable')->default(true);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Employee Allowances
        Schema::create('employee_allowances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->foreignId('allowance_id')->constrained('allowances')->onDelete('restrict');
            $table->decimal('amount', 15, 2)->default(0);
            $table->date('effective_from')->nullable();
            $table->date('effective_to')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->unique(['employee_id', 'allowance_id'], 'unique_employee_allowance');
        });

        // Employee Deductions
        Schema::create('employee_deductions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->foreignId('deduction_id')->constrained('deductions')->onDelete('restrict');
            $table->decimal('amount', 15, 2)->default(0);
            $table->date('effective_from')->nullable();
            $table->date('effective_to')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->unique(['employee_id', 'deduction_id'], 'unique_employee_deduction');
        });

        // Employee Loans
        Schema::create('employee_loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->string('loan_number')->unique();
            $table->date('loan_date');
            $table->decimal('loan_amount', 15, 2);
            $table->integer('installments')->default(1);
            $table->decimal('monthly_installment', 15, 2)->default(0);
            $table->decimal('paid_amount', 15, 2)->default(0);
            $table->decimal('remaining_amount', 15, 2);
            $table->enum('status', ['active', 'completed', 'cancelled'])->default('active');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });

        // Loan Installments
        Schema::create('loan_installments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_id')->constrained('employee_loans')->onDelete('cascade');
            $table->date('due_date');
            $table->decimal('amount', 15, 2);
            $table->decimal('paid_amount', 15, 2)->default(0);
            $table->date('paid_date')->nullable();
            $table->enum('status', ['pending', 'paid', 'skipped'])->default('pending');
            $table->timestamps();
        });

        // Authorized Leaves
        Schema::create('authorized_leaves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->enum('leave_type', ['annual', 'sick', 'casual', 'unpaid', 'other'])->default('annual');
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('days');
            $table->text('reason')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->foreignId('approved_by')->nullable()->constrained('users')->onDelete('set null');
            $table->date('approved_date')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });

        // Payroll Periods
        Schema::create('payroll_periods', function (Blueprint $table) {
            $table->id();
            $table->string('period')->unique(); // Format: YYYY-MM
            $table->date('from_date');
            $table->date('to_date');
            $table->enum('status', ['draft', 'processed', 'locked'])->default('draft');
            $table->foreignId('processed_by')->nullable()->constrained('users')->onDelete('set null');
            $table->date('processed_date')->nullable();
            $table->timestamps();
        });

        // Payroll Records
        Schema::create('payroll_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payroll_period_id')->constrained('payroll_periods')->onDelete('cascade');
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            
            // Earnings
            $table->decimal('basic_salary', 15, 2)->default(0);
            $table->decimal('total_allowances', 15, 2)->default(0);
            $table->decimal('gross_salary', 15, 2)->default(0);
            
            // Deductions
            $table->decimal('total_deductions', 15, 2)->default(0);
            $table->decimal('loan_deductions', 15, 2)->default(0);
            $table->decimal('leave_deductions', 15, 2)->default(0);
            $table->decimal('tax_deductions', 15, 2)->default(0);
            $table->decimal('other_deductions', 15, 2)->default(0);
            
            // Net
            $table->decimal('net_salary', 15, 2)->default(0);
            
            // Days
            $table->integer('working_days')->default(0);
            $table->integer('present_days')->default(0);
            $table->integer('absent_days')->default(0);
            $table->integer('leave_days')->default(0);
            
            $table->text('remarks')->nullable();
            $table->timestamps();
            
            $table->unique(['payroll_period_id', 'employee_id']);
        });

        // Payroll Allowance Details
        Schema::create('payroll_allowance_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payroll_record_id')->constrained('payroll_records')->onDelete('cascade');
            $table->foreignId('allowance_id')->constrained('allowances')->onDelete('restrict');
            $table->decimal('amount', 15, 2)->default(0);
            $table->timestamps();
        });

        // Payroll Deduction Details
        Schema::create('payroll_deduction_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payroll_record_id')->constrained('payroll_records')->onDelete('cascade');
            $table->foreignId('deduction_id')->constrained('deductions')->onDelete('restrict');
            $table->decimal('amount', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payroll_deduction_details');
        Schema::dropIfExists('payroll_allowance_details');
        Schema::dropIfExists('payroll_records');
        Schema::dropIfExists('payroll_periods');
        Schema::dropIfExists('authorized_leaves');
        Schema::dropIfExists('loan_installments');
        Schema::dropIfExists('employee_loans');
        Schema::dropIfExists('employee_deductions');
        Schema::dropIfExists('employee_allowances');
        Schema::dropIfExists('deductions');
        Schema::dropIfExists('allowances');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('designations');
        Schema::dropIfExists('departments');
    }
};

