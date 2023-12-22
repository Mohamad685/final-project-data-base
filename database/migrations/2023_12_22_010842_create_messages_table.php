<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id('MessageID');
            $table->text('MessageText');
            $table->timestamp('Timestamp');
            $table->unsignedBigInteger('SenderID');
            $table->foreign('SenderID')->references('UserID')->on('users');
            $table->unsignedBigInteger('ReceiverID');
            $table->foreign('ReceiverID')->references('UserID')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
