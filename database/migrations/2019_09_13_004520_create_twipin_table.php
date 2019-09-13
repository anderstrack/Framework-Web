<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwipinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twipin', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigIntenger('usuario');
            $table->foreign('usuario')->references('id')->on('users')->onDelete('cascade');
            $table->string('comentario');
            $table->timestamps('data_criacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('twipin');
    }
}
