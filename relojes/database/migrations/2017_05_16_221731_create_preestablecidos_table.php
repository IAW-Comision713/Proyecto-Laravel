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
            
            $table->string('nombre');
            
            $table->integer('malla')->unsigned();
            $table->integer('malla')->references('id')->on('mallas');
            
            $table->integer('fondo')->unsigned();
            $table->integer('fondo')->references('id')->on('fondos');
            
            $table->integer('marco')->unsigned();
            $table->integer('marco')->references('id')->on('marcos');
            
            $table->integer('agujas')->unsigned();
            $table->integer('agujas')->references('id')->on('agujas');
            
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
