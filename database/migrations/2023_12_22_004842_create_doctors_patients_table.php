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
        Schema::create('doctors_patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('DoctorID')->nullable();
            $table->foreign('DoctorID')->references('DoctorID')->on('doctors');
            $table->unsignedBigInteger('PatientID');
            $table->foreign('PatientID')->references('PatientID')->on('patients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors_patients');
    }
};
