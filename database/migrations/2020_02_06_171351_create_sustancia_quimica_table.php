<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSustanciaQuimicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sustancia_quimica', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre', 150);
            $table->string('formula', 150);
            $table->float('cantidad');
            $table->string('concentracion', 40);
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
        Schema::dropIfExists('sustancia_quimica');
    }
}
