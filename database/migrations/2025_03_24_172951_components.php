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
        Schema::create('components', function (Blueprint $table) {
            $table->id(); // ID autoincrementable y clave primaria con nombre 'id_equipo'
            $table->string('description');
            $table->string('package');
            $table->string('part_number');
            $table->string('quantity');
            $table->string('Specs');
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('components');
    }
};
