<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre', 70);
            $table->string('fecha', 11)->unique();
            $table->string('hora', 5)->unique();
            $table->Integer('persona_id')->unsigned();
            $table->Integer('equipo_id')->unsigned();
            $table->timestamps();
            $table->foreign('persona_id')->references('id')->on('users');
            $table->foreign('equipo_id')->references('id')->on('equipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practicas');
    }
}
