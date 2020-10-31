<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDetalleServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_servicio', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('num_factura');
            $table->float('subtotal');
            $table->string('tipo_servicio', 255);
            $table->unsignedBigInteger('cliente_id')->constrained('cliente');
            $table->unsignedBigInteger('cita_id')->constrained('cita');
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
        Schema::drop('detalle_servicio');
    }
}
