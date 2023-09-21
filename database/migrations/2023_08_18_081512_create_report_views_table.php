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
        Schema::create('report_views', function (Blueprint $table) {
            $table->id("report_view_id");
            $table->string("heading");
            $table->string("slug");
            $table->string("report_code");
            $table->string("published_on");
            $table->string("display_image");
            $table->string("thumbnail_image");
            $table->string("short_description");
            $table->string("page");
            $table->string("category");
            $table->string("category_id");
            $table->string("big_image");
            $table->string("default_description");
            $table->string("request_description");
            $table->string("table_of_content");
            $table->string("methodology");
            $table->string("single_user_license");
            $table->string("multi_user_license");
            $table->string("enterprise_user_license");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_views');
    }
};