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
        Schema::table('report_views', function (Blueprint $table) {
            //
            $table->string("meta_title")->after("enterprise_user_license");
            $table->string("meta_description")->after("meta_title");
            $table->string("meta_tags")->after("meta_description");
            $table->string("meta_keywords")->after("meta_tags");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('report_views', function (Blueprint $table) {
            //
        });
    }
};
