<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Chart of Accounts
        Schema::create('chart_of_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->enum('type', ['asset', 'liability', 'equity', 'income', 'expense'])->index();
            $table->enum('category', [
                'current_asset', 'fixed_asset', 'non_current_asset',
                'current_liability', 'long_term_liability',
                'capital', 'retained_earnings', 'drawings',
                'revenue', 'other_income',
                'cost_of_sales', 'operating_expense', 'financial_expense', 'other_expense'
            ])->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('chart_of_accounts')->onDelete('cascade');
            $table->decimal('opening_balance', 15, 2)->default(0);
            $table->enum('balance_type', ['dr', 'cr'])->default('dr');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_system')->default(false);
            $table->integer('level')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Vouchers
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('voucher_number')->unique();
            $table->date('voucher_date');
            $table->enum('type', ['BPV', 'BRV', 'CPV', 'CRV', 'JVR']); // Bank Payment, Bank Receipt, Cash Payment, Cash Receipt, Journal
            $table->text('narration')->nullable();
            $table->decimal('total_debit', 15, 2)->default(0);
            $table->decimal('total_credit', 15, 2)->default(0);
            $table->enum('status', ['draft', 'posted', 'cancelled', 'unposted'])->default('draft');
            $table->date('posted_date')->nullable();
            $table->foreignId('posted_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('cancelled_by')->nullable()->constrained('users')->onDelete('set null');
            $table->date('cancelled_date')->nullable();
            $table->text('cancellation_reason')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('voucher_date');
            $table->index('type');
            $table->index('status');
        });

        // Voucher Entries (Double Entry)
        Schema::create('voucher_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voucher_id')->constrained('vouchers')->onDelete('cascade');
            $table->foreignId('account_id')->constrained('chart_of_accounts')->onDelete('restrict');
            $table->text('description')->nullable();
            $table->decimal('debit', 15, 2)->default(0);
            $table->decimal('credit', 15, 2)->default(0);
            $table->integer('sequence')->default(0);
            $table->timestamps();
            
            $table->index('account_id');
        });

        // CN Expense Linking
        Schema::create('cn_expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cn_id')->constrained('consignment_notes')->onDelete('cascade');
            $table->foreignId('voucher_entry_id')->nullable()->constrained('voucher_entries')->onDelete('set null');
            $table->foreignId('expense_account_id')->constrained('chart_of_accounts')->onDelete('restrict');
            $table->decimal('amount', 15, 2);
            $table->text('description')->nullable();
            $table->date('expense_date');
            $table->timestamps();
        });

        // Party Ledger (for quick access)
        Schema::create('party_ledgers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('party_id')->constrained('parties')->onDelete('cascade');
            $table->date('transaction_date');
            $table->string('reference_type')->nullable(); // invoice, voucher, payment, etc.
            $table->unsignedBigInteger('reference_id')->nullable();
            $table->text('description')->nullable();
            $table->decimal('debit', 15, 2)->default(0);
            $table->decimal('credit', 15, 2)->default(0);
            $table->decimal('balance', 15, 2)->default(0);
            $table->timestamps();
            
            $table->index(['party_id', 'transaction_date']);
            $table->index(['reference_type', 'reference_id']);
        });

        // Sales Tax Registers
        Schema::create('sales_tax_registers', function (Blueprint $table) {
            $table->id();
            $table->date('tax_period'); // YYYY-MM format
            $table->foreignId('party_id')->nullable()->constrained('parties')->onDelete('set null');
            $table->string('invoice_number')->nullable();
            $table->date('invoice_date')->nullable();
            $table->string('ntn')->nullable();
            $table->string('strn')->nullable();
            $table->decimal('taxable_amount', 15, 2)->default(0);
            $table->decimal('tax_rate', 5, 2)->default(0);
            $table->decimal('tax_amount', 15, 2)->default(0);
            $table->enum('type', ['output', 'input'])->default('output');
            $table->timestamps();
            
            $table->index('tax_period');
            $table->index('party_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales_tax_registers');
        Schema::dropIfExists('party_ledgers');
        Schema::dropIfExists('cn_expenses');
        Schema::dropIfExists('voucher_entries');
        Schema::dropIfExists('vouchers');
        Schema::dropIfExists('chart_of_accounts');
    }
};

