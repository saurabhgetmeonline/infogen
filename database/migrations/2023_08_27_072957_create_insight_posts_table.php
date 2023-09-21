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
        Schema::create('insight_posts', function (Blueprint $table) {
            $table->id("insight_post_id");
            $table->string("thumbnail_image");
            $table->string("big_image");
            $table->string("heading");
            $table->string("sort_description");
            $table->string("date");
            $table->string("category");
            $table->string("text");
            $table->string("tags");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insight_posts');
    }
};
