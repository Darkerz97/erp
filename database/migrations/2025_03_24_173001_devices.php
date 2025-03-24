<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id(); // ID autoincrementable y clave primaria con nombre 'id_equipo'
            $table->string('comercial_name');
            $table->string('brand');
            $table->string('model');
            $table->string('dir_manual')->nullable(); //Permite valores nulos
            $table->string('dir_img')->nullable(); //Permite valores nulos
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('devices');
    }
};
