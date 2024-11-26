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
        Schema::create('dental_offices', function (Blueprint $table) {
            $table->id();
            $table->integer('corporate_id')->foreign()->references('id')->on('corporate');
            $table->integer('dental_office_id')->foreign()->references('id')->on('dental_office');
            $table->integer('dentist_id')->foreign()->references('id')->on('dentist');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dental_offices');
    }
};
