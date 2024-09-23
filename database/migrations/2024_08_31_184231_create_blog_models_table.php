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
        Schema::create('blog_models', function (Blueprint $table) {
            $table->id('blog_id');
            $table->string('category_id');
            $table->string('author_id');
            $table->string('title');
            $table->longText('content');
            $table->string('featured_image');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_models');
    }
};
