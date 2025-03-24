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
        // este metodo define la estructura de la tabla
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // ID autoincrementable y clave primaria
            $table-> string('company_name');
            $table-> string('company_email')->unique(); // Asegura que los correos sean únicos
            $table-> string('company_location');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // revierte la migracion(elimina la tabla)
        Schema::dropIfExists('customers');
    }
};
