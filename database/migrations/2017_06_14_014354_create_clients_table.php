<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_representante');
            $table->string('empresa');
            $table->string('email');
            $table->string('ubicacion_fiscal');
            $table->string('producto');
            $table->string('cantidad');
            $table->string('entrega');
            $table->string('puerto_destino');
            $table->string('consumo_mes');
            $table->string('frecuencia_reposicion_inventario');
            $table->text('comentarios');
            $table->string('archivo');
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
        Schema::dropIfExists('clients');
    }
}
