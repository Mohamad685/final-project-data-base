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
            $table->id('PatientID');
            $table->string('Name');
            $table->date('DOB');
            $table->string('Gender');
            $table->string('ContactInfo');
            $table->unsignedBigInteger('InsuranceID')->nullable();
            $table->foreign('InsuranceID')->references('InsuranceID')->on('insurance_companies');
            $table->unsignedBigInteger('TypeID');
            $table->foreign('TypeID')->references('TypeID')->on('user_types');
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
