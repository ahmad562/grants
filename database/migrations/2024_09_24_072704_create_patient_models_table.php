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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('city');
            $table->string('zipcode');
            $table->string('state');
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->string('website')->nullable();
            $table->string('email');
            $table->string('title');
            $table->date('dateofbirth');
            $table->string('cellphone');
            $table->unsignedTinyInteger('shade');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('status', ['Active', 'Inactive', 'Deleted'])->default('Active');
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
        Schema::dropIfExists('patients');
    }
};
