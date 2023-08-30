<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistromascotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registromascota', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('especie');
            $table->string('raza');
            $table->string('edad');
            $table->string('genero');
            $table->string('ciclo_vacunas');
            $table->string('esterilizado');
            $table->string('condicion');
            $table->string('enfermedades');
            $table->string('observacion');
            $table->string('custodio');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('TagId');
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
        Schema::dropIfExists('registromascota');
    }
}
