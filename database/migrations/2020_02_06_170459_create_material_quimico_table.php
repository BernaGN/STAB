<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialQuimicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_quimico', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre', 150);
            $table->Integer('material');
            $table->string('capacidad', 50);
            $table->string('marca', 50);
            $table->Integer('cantidad');
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
        Schema::dropIfExists('material_quimico');
    }
}
