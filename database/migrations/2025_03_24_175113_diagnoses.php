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
        Schema::create('diagnoses',function (Blueprint $table){
            $table-> id();
            $table-> String('reported_problem');
            $table->unsignedBigInteger('device_id');
            $table-> foreign('device_id')->references('id')->on('devices');
            $table-> String('Pre_diagnosis');
            $table-> String('diagnosis');
            $table-> timestamps();
            $table-> string('refurbishment');
            $table-> String('dir_img');
            $table->unsignedBigInteger('requests_id');
            $table-> foreign('requests_id')->references('id')->on('requests');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('diagnoses');

    }
    
};



