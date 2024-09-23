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
        Schema::create('categories_models', function (Blueprint $table) {
            $table->id('category_id'); // Primary key, auto-incrementing
            $table->string('name'); // Name of the category
            $table->longText('description')->nullable(); // Optional description of the category
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories_models');
    }
};
