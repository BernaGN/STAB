<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre')->unique();
            $table->string('email')->unique();
            $table->string('no_control', 12);
            $table->string('password');
            $table->Integer('carrera_id')->unsigned();
            $table->Integer('grupo_id')->unsigned();
            $table->Integer('usuario_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->foreign('usuario_id')->references('id')->on('tipo_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
