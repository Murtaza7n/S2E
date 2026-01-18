<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('consignment_notes', function (Blueprint $table) {
            $table->foreign('load_plan_id')->references('id')->on('load_plans')->onDelete('set null');
            $table->foreign('delivery_sheet_id')->references('id')->on('delivery_sheets')->onDelete('set null');
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('consignment_notes', function (Blueprint $table) {
            $table->dropForeign(['load_plan_id']);
            $table->dropForeign(['delivery_sheet_id']);
            $table->dropForeign(['invoice_id']);
        });
    }
};

