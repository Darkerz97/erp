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
        //
        Schema::create('requests', function(Blueprint $table) {

            $table-> id();
            $table->unsignedBigInteger('component_id');
            $table-> foreign('component_id')->references('id')->on('components');
            $table-> integer('Requested_quantity');
            $table-> date('Date_request');
            $table-> date('Date_arrival');
            $table-> timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('requests');
    }
};
