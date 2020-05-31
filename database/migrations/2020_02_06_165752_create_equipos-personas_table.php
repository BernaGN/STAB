<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo-personas', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('equipo_id')->unsigned();
            $table->Integer('persona_id')->unsigned();
            $table->timestamps();
            $table->foreign('equipo_id')->references('id')->on('equipo');
            $table->foreign('persona_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo-personas');
    }
}
