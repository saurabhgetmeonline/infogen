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
        Schema::table('insight_posts', function (Blueprint $table) {
            //
            $table->string("report_code")->after("heading");
            $table->string("page")->after("sort_description");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('insight_posts', function (Blueprint $table) {
            //
        });
    }
};
