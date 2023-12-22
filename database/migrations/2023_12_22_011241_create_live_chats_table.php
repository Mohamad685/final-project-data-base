<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id('ChatID');
            $table->unsignedBigInteger('InitiatorUserID');
            $table->foreign('InitiatorUserID')->references('UserID')->on('users');
            $table->unsignedBigInteger('ReceiverUserID');
            $table->foreign('ReceiverUserID')->references('UserID')->on('users');
            $table->timestamp('CreatedAt')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
