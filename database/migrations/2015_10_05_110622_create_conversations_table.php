<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
Use Illuminate\Database\Schema\Blueprint;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->increments('id');
            $user_idColumnType = config('talk.uuid') ? 'string' : 'integer';
            $table->{$user_idColumnType}('user_one');
            // $table->integer('user_one');
            $user_idColumnType = config('talk.uuid') ? 'string' : 'integer';
            $table->{$user_idColumnType}('user_two');
            // $table->integer('user_two');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversations');
    }
}
