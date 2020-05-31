<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticaMaterialQuimicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practica-material-quimico', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('equipo_id')->unsigned();
            $table->Integer('material_id')->unsigned();
            $table->Integer('practica_id')->unsigned();
            $table->timestamps();
            $table->foreign('equipo_id')->references('id')->on('equipo');
            $table->foreign('material_id')->references('id')->on('material_quimico');
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
        Schema::dropIfExists('practica-material-quimico');
    }
}
