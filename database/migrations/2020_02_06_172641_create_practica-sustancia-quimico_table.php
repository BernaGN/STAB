<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticaSustanciaQuimicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practica-sustancia-quimico', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('equipo_id')->unsigned();
            $table->Integer('sustancia_id')->unsigned();
            $table->Integer('practica_id')->unsigned();
            $table->timestamps();
            $table->foreign('equipo_id')->references('id')->on('equipo');
            $table->foreign('sustancia_id')->references('id')->on('sustancia_quimica');
            $table->foreign('practica_id')->references('id')->on('practicas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practica-sustancia-quimico');
    }
}
