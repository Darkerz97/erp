<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id('id_equipo'); // ID autoincrementable y clave primaria con nombre 'id_equipo'
            $table->string('nombre_comercial');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->string('manual')->nullable(); //Permite valores nulos
            $table->string('archivos')->nullable(); //Permite valores nulos
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}