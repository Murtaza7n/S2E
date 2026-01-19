<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('chart_of_accounts', function (Blueprint $table) {
            $table->foreignId('group_id')->nullable()->after('parent_id')->constrained('account_groupings')->onDelete('set null');
            $table->foreignId('control_code_id')->nullable()->after('group_id')->constrained('control_codes')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('chart_of_accounts', function (Blueprint $table) {
            $table->dropForeign(['group_id']);
            $table->dropForeign(['control_code_id']);
            $table->dropColumn(['group_id', 'control_code_id']);
        });
    }
};

