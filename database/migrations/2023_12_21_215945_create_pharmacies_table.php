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
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id('PharmacyID');
            $table->string('Name');
            $table->string('Location');
            $table->string('ContactInfo');
            $table->unsignedBigInteger('TypeID');
            $table->foreign('TypeID')->references('TypeID')->on('user_types');
            $table->unsignedBigInteger('AdminID');
            $table->foreign('AdminID')->references('AdminID')->on('admins');
            // $table->unsignedBigInteger('DoctorID')->nullable();
            // $table->foreign('DoctorID')->references('DoctorID')->on('doctors');
            // $table->unsignedBigInteger('PatientID');
            // $table->foreign('PatientID')->references('PatientID')->on('patients');
            // $table->unsignedBigInteger('InsuranceID')->nullable();
            // $table->foreign('InsuranceID')->references('InsuranceID')->on('insurance_companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
    }
};
