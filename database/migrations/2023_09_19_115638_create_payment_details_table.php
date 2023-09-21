<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_details', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('company_name');
            $table->string('message');
            $table->string('country');
            $table->string('mobile');
            $table->string('report_category');
            $table->string('report_view_slug');
            $table->string('license_type');
            $table->string('amount');
            $table->string('payment_order_id');
            $table->string('transaction_id');
            $table->string('payment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_details');
    }
};
