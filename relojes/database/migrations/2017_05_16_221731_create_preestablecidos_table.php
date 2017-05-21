<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreestablecidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preestablecidos', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->string('nombre')->required();
            
            $table->integer('malla')->unsigned();
            $table->foreign('malla')->references('id')->on('mallas');
            
            $table->integer('fondo')->unsigned();
            $table->foreign('fondo')->references('id')->on('fondos');
            
            $table->integer('marco')->unsigned();
            $table->foreign('marco')->references('id')->on('marcos');
            
            $table->integer('agujas')->unsigned();
            $table->foreign('agujas')->references('id')->on('agujas');

            $table->integer('usuario')->unsigned();
            $table->foreign('usuario')->references('id')->on('users');
            
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
        Schema::dropIfExists('preestablecidos');
    }
}
