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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('DoctorID');
            $table->string('Name');
            $table->string('Specialization');
            $table->string('ContactInfo');
            $table->unsignedBigInteger('AdminID');
            $table->foreign('AdminID')->references('AdminID')->on('admins');
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
        Schema::dropIfExists('doctors');
    }
};
