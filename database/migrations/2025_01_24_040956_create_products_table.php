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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categories_id');
            $table->string('name');
            $table->string('description');
            $table->string('link');
            $table->text('composition')->nullable();
            $table->text('mechanism_of_action')->nullable();
            $table->text('presentation')->nullable();
            $table->text('search box')->nullable();
            $table->text('value proposition')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
