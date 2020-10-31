<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 255);
            $table->string('apellido_paterno', 255);
            $table->string('apellido_materno', 255);
            $table->string('edad', 255);
            $table->string('nombre_usuario', 255);
            $table->string('contrasena', 255);
            $table->unsignedBigInteger('direccion_id')->constrained('direccion');
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
        Schema::drop('cliente');
    }
}
