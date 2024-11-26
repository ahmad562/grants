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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->Integer('dental_office_id');
            $table->Integer('dentist_id');
            $table->text('description');
            $table->enum('type', ['Weekly', 'Monthly']);
            $table->enum('invoice_month', ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']);
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('invoice_status', ['Paid', 'Unpaid', 'Cancelled']);
            $table->Integer('created_by');
            $table->Integer('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
