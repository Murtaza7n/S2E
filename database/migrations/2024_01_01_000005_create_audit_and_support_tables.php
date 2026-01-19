<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Audit Logs
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('action'); // created, updated, deleted, posted, unposted, etc.
            $table->string('model_type'); // ConsignmentNote, Invoice, Voucher, etc.
            $table->unsignedBigInteger('model_id');
            $table->text('old_values')->nullable();
            $table->text('new_values')->nullable();
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
            
            $table->index(['model_type', 'model_id']);
            $table->index('user_id');
            $table->index('created_at');
        });

        // Control Lists (Editable Reports)
        Schema::create('control_lists', function (Blueprint $table) {
            $table->id();
            $table->string('list_type'); // delivery_control, pickup_control, etc.
            $table->date('list_date');
            $table->foreignId('cargo_office_id')->nullable()->constrained('cargo_offices')->onDelete('set null');
            $table->foreignId('rider_id')->nullable()->constrained('riders')->onDelete('set null');
            $table->json('data'); // Flexible JSON data
            $table->enum('status', ['draft', 'finalized'])->default('draft');
            $table->foreignId('created_by')->constrained('users')->onDelete('restrict');
            $table->timestamps();
        });

        // Notification Logs
        Schema::create('notification_logs', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // sms, whatsapp, email
            $table->string('recipient');
            $table->text('message');
            $table->enum('status', ['pending', 'sent', 'failed'])->default('pending');
            $table->text('response')->nullable();
            $table->foreignId('related_model_id')->nullable();
            $table->string('related_model_type')->nullable();
            $table->timestamps();
            
            $table->index('status');
            $table->index('created_at');
        });

        // System Settings
        Schema::create('system_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('type')->default('string'); // string, integer, boolean, json
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('system_settings');
        Schema::dropIfExists('notification_logs');
        Schema::dropIfExists('control_lists');
        Schema::dropIfExists('audit_logs');
    }
};

