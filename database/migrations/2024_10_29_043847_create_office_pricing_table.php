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
        Schema::create('office_pricing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dental_office_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_pricing');
    }
};
