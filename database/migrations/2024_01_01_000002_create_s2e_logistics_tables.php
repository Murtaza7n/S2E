<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Item Codes
        Schema::create('item_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Invoice Charges
        Schema::create('invoice_charges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->enum('type', ['fixed', 'percentage', 'per_kg', 'per_cn'])->default('fixed');
            $table->decimal('amount', 15, 2)->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Zones (must be first)
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Cities (depends on zones)
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->foreignId('zone_id')->nullable()->constrained('zones')->onDelete('set null');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Areas (depends on cities)
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->foreignId('city_id')->constrained('cities')->onDelete('restrict');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Cargo Offices / SPO (depends on cities)
        Schema::create('cargo_offices', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('set null');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // SPO / Cargo Officers (depends on cargo_offices)
        Schema::create('cargo_officers', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->foreignId('cargo_office_id')->constrained('cargo_offices')->onDelete('restrict');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Parties (depends on cities and areas)
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('contact_person')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('ntn')->nullable();
            $table->string('strn')->nullable();
            $table->enum('type', ['customer', 'vendor', 'both'])->default('customer');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('set null');
            $table->foreignId('area_id')->nullable()->constrained('areas')->onDelete('set null');
            $table->decimal('opening_balance', 15, 2)->default(0);
            $table->enum('balance_type', ['dr', 'cr'])->default('dr');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });

        // Party-wise Rates
        Schema::create('party_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('party_id')->constrained('parties')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('restrict');
            $table->foreignId('item_code_id')->nullable()->constrained('item_codes')->onDelete('set null');
            $table->decimal('rate', 15, 2);
            $table->enum('rate_type', ['per_kg', 'per_cn', 'fixed'])->default('per_kg');
            $table->decimal('min_charge', 15, 2)->default(0);
            $table->date('effective_from')->nullable();
            $table->date('effective_to')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->unique(['party_id', 'city_id', 'item_code_id'], 'unique_party_city_item_rate');
        });

        // CN Stock Issue (Cargo Office-wise)
        Schema::create('cn_stock_issues', function (Blueprint $table) {
            $table->id();
            $table->string('issue_number')->unique();
            $table->date('issue_date');
            $table->foreignId('from_office_id')->constrained('cargo_offices')->onDelete('restrict');
            $table->foreignId('to_office_id')->constrained('cargo_offices')->onDelete('restrict');
            $table->integer('from_cn_number');
            $table->integer('to_cn_number');
            $table->integer('quantity');
            $table->text('remarks')->nullable();
            $table->foreignId('issued_by')->constrained('users')->onDelete('restrict');
            $table->timestamps();
        });

        // CN Stock (Current stock per office)
        Schema::create('cn_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cargo_office_id')->constrained('cargo_offices')->onDelete('restrict');
            $table->integer('from_cn_number');
            $table->integer('to_cn_number');
            $table->integer('available_quantity');
            $table->integer('used_quantity')->default(0);
            $table->timestamps();
            
            $table->unique('cargo_office_id');
        });

        // Consignment Notes (CN)
        Schema::create('consignment_notes', function (Blueprint $table) {
            $table->id();
            $table->string('cn_number')->unique();
            $table->date('cn_date');
            $table->foreignId('cargo_office_id')->constrained('cargo_offices')->onDelete('restrict');
            $table->foreignId('party_id')->constrained('parties')->onDelete('restrict');
            $table->foreignId('item_code_id')->nullable()->constrained('item_codes')->onDelete('set null');
            $table->foreignId('origin_city_id')->constrained('cities')->onDelete('restrict');
            $table->foreignId('destination_city_id')->constrained('cities')->onDelete('restrict');
            $table->foreignId('origin_area_id')->nullable()->constrained('areas')->onDelete('set null');
            $table->foreignId('destination_area_id')->nullable()->constrained('areas')->onDelete('set null');
            
            // Consignor Details
            $table->string('consignor_name');
            $table->string('consignor_phone')->nullable();
            $table->text('consignor_address')->nullable();
            
            // Consignee Details
            $table->string('consignee_name');
            $table->string('consignee_phone')->nullable();
            $table->text('consignee_address')->nullable();
            
            // CN Details
            $table->integer('pieces')->default(1);
            $table->decimal('weight', 10, 3)->default(0);
            $table->decimal('rate', 15, 2)->default(0);
            $table->decimal('freight', 15, 2)->default(0);
            $table->decimal('cod_amount', 15, 2)->default(0);
            $table->decimal('fuel_charge', 15, 2)->default(0);
            $table->decimal('other_charges', 15, 2)->default(0);
            $table->decimal('total_amount', 15, 2)->default(0);
            
            // Status
            $table->enum('status', ['pending', 'picked', 'in_transit', 'out_for_delivery', 'delivered', 'returned', 'cancelled'])->default('pending');
            $table->date('pickup_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->date('return_date')->nullable();
            
            // Workflow (Foreign keys added in separate migration)
            $table->boolean('is_in_load_plan')->default(false);
            $table->unsignedBigInteger('load_plan_id')->nullable();
            $table->boolean('is_in_delivery_sheet')->default(false);
            $table->unsignedBigInteger('delivery_sheet_id')->nullable();
            $table->boolean('is_invoiced')->default(false);
            $table->unsignedBigInteger('invoice_id')->nullable();
            
            // Rider/Driver
            $table->foreignId('pickup_rider_id')->nullable()->constrained('riders')->onDelete('set null');
            $table->foreignId('delivery_rider_id')->nullable()->constrained('riders')->onDelete('set null');
            
            // Financial
            $table->decimal('cost_price', 15, 2)->default(0);
            $table->decimal('profit_loss', 15, 2)->default(0);
            
            $table->text('remarks')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('cn_date');
            $table->index('status');
            $table->index('party_id');
            $table->index('cargo_office_id');
        });

        // Riders
        Schema::create('riders', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('cnic')->nullable();
            $table->enum('type', ['pickup', 'delivery', 'both'])->default('both');
            $table->foreignId('cargo_office_id')->constrained('cargo_offices')->onDelete('restrict');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Vehicles
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number')->unique();
            $table->string('vehicle_type')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('driver_phone')->nullable();
            $table->decimal('capacity_kg', 10, 2)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Load Plans
        Schema::create('load_plans', function (Blueprint $table) {
            $table->id();
            $table->string('load_plan_number')->unique();
            $table->date('load_plan_date');
            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('restrict');
            $table->foreignId('origin_office_id')->constrained('cargo_offices')->onDelete('restrict');
            $table->foreignId('destination_office_id')->constrained('cargo_offices')->onDelete('restrict');
            $table->integer('total_cns')->default(0);
            $table->decimal('total_weight', 10, 3)->default(0);
            $table->enum('status', ['draft', 'dispatched', 'received', 'cancelled'])->default('draft');
            $table->date('dispatch_date')->nullable();
            $table->date('receive_date')->nullable();
            $table->text('remarks')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('restrict');
            $table->timestamps();
        });

        // Load Plan Items
        Schema::create('load_plan_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('load_plan_id')->constrained('load_plans')->onDelete('cascade');
            $table->foreignId('cn_id')->constrained('consignment_notes')->onDelete('cascade');
            $table->integer('sequence')->default(0);
            $table->timestamps();
            
            $table->unique(['load_plan_id', 'cn_id']);
        });

        // Delivery Sheets
        Schema::create('delivery_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_sheet_number')->unique();
            $table->date('delivery_sheet_date');
            $table->foreignId('cargo_office_id')->constrained('cargo_offices')->onDelete('restrict');
            $table->foreignId('rider_id')->constrained('riders')->onDelete('restrict');
            $table->integer('total_cns')->default(0);
            $table->integer('delivered_count')->default(0);
            $table->integer('returned_count')->default(0);
            $table->enum('status', ['draft', 'assigned', 'completed', 'cancelled'])->default('draft');
            $table->text('remarks')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('restrict');
            $table->timestamps();
        });

        // Delivery Sheet Items
        Schema::create('delivery_sheet_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delivery_sheet_id')->constrained('delivery_sheets')->onDelete('cascade');
            $table->foreignId('cn_id')->constrained('consignment_notes')->onDelete('cascade');
            $table->integer('sequence')->default(0);
            $table->timestamps();
            
            $table->unique(['delivery_sheet_id', 'cn_id']);
        });

        // Pickup Sheets
        Schema::create('pickup_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_sheet_number')->unique();
            $table->date('pickup_sheet_date');
            $table->foreignId('cargo_office_id')->constrained('cargo_offices')->onDelete('restrict');
            $table->foreignId('rider_id')->constrained('riders')->onDelete('restrict');
            $table->integer('total_cns')->default(0);
            $table->integer('picked_count')->default(0);
            $table->enum('status', ['draft', 'assigned', 'completed', 'cancelled'])->default('draft');
            $table->text('remarks')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('restrict');
            $table->timestamps();
        });

        // Pickup Sheet Items
        Schema::create('pickup_sheet_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pickup_sheet_id')->constrained('pickup_sheets')->onDelete('cascade');
            $table->foreignId('cn_id')->constrained('consignment_notes')->onDelete('cascade');
            $table->integer('sequence')->default(0);
            $table->timestamps();
            
            $table->unique(['pickup_sheet_id', 'cn_id']);
        });

        // Party Fuel Rates
        Schema::create('party_fuel_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('party_id')->constrained('parties')->onDelete('cascade');
            $table->decimal('fuel_rate', 15, 2);
            $table->enum('rate_type', ['percentage', 'fixed'])->default('percentage');
            $table->date('effective_from')->nullable();
            $table->date('effective_to')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Invoices
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->unique();
            $table->date('invoice_date');
            $table->foreignId('party_id')->constrained('parties')->onDelete('restrict');
            $table->foreignId('cargo_office_id')->constrained('cargo_offices')->onDelete('restrict');
            $table->integer('total_cns')->default(0);
            $table->decimal('subtotal', 15, 2)->default(0);
            $table->decimal('total_charges', 15, 2)->default(0);
            $table->decimal('total_fuel', 15, 2)->default(0);
            $table->decimal('total_amount', 15, 2)->default(0);
            $table->decimal('tax_amount', 15, 2)->default(0);
            $table->decimal('grand_total', 15, 2)->default(0);
            $table->enum('status', ['draft', 'posted', 'cancelled'])->default('draft');
            $table->text('remarks')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });

        // Invoice Items (CNs)
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained('invoices')->onDelete('cascade');
            $table->foreignId('cn_id')->constrained('consignment_notes')->onDelete('cascade');
            $table->decimal('freight', 15, 2)->default(0);
            $table->decimal('fuel_charge', 15, 2)->default(0);
            $table->decimal('other_charges', 15, 2)->default(0);
            $table->decimal('total', 15, 2)->default(0);
            $table->timestamps();
            
            $table->unique(['invoice_id', 'cn_id']);
        });

        // Invoice Charges
        Schema::create('invoice_charge_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained('invoices')->onDelete('cascade');
            $table->foreignId('invoice_charge_id')->constrained('invoice_charges')->onDelete('restrict');
            $table->decimal('amount', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoice_charge_items');
        Schema::dropIfExists('invoice_items');
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('party_fuel_rates');
        Schema::dropIfExists('pickup_sheet_items');
        Schema::dropIfExists('pickup_sheets');
        Schema::dropIfExists('delivery_sheet_items');
        Schema::dropIfExists('delivery_sheets');
        Schema::dropIfExists('load_plan_items');
        Schema::dropIfExists('load_plans');
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('riders');
        Schema::dropIfExists('consignment_notes');
        Schema::dropIfExists('cn_stocks');
        Schema::dropIfExists('cn_stock_issues');
        Schema::dropIfExists('party_rates');
        Schema::dropIfExists('areas');
        Schema::dropIfExists('parties');
        Schema::dropIfExists('cargo_officers');
        Schema::dropIfExists('cargo_offices');
        Schema::dropIfExists('areas');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('zones');
        Schema::dropIfExists('invoice_charges');
        Schema::dropIfExists('item_codes');
    }
};

