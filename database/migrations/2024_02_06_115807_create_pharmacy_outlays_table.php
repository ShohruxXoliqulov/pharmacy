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
        Schema::create('pharmacy_outlays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmacy_id');
            $table->foreignId('expired_id');
            $table->foreignId('product_id');
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacy_outlays');
    }
};
