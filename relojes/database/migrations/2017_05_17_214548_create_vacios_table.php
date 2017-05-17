<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacios', function (Blueprint $table) {
            
            $table->integer('malla')->unsigned();
            $table->foreign('malla')->references('id')->on('mallas');
            
            $table->integer('fondo')->unsigned();
            $table->foreign('fondo')->references('id')->on('fondos');
            
            $table->integer('marco')->unsigned();
            $table->foreign('marco')->references('id')->on('marcos');
            
            $table->integer('agujas')->unsigned();
            $table->foreign('agujas')->references('id')->on('agujas');
            
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
        Schema::dropIfExists('vacios');
    }
}
