<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDireccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('calle', 255);
            $table->string('num_ext', 50);
            $table->string('num_int', 50);
            $table->string('colonia', 255);
            $table->string('codigo_postal', 50);
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('municipio_id')->constrained('municipio');
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
        Schema::drop('direccion');
    }
}
