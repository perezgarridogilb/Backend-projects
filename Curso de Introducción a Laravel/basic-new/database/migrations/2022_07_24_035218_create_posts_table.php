<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');

            /** Se va a conectar a nuestra tabla de usuarios */
            $table->bigInteger('user_id')->unsigned();

            /** El título con su slug correspondiente */
            $table->string('title');
            $table->string('slug')->unique();

            $table->string('image')->nullable();

            $table->text('body');
            $table->text('iframe')->nullable();

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
