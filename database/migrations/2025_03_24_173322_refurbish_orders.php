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
        Schema::create('Refurbish_orders',function ($table) {
            $table -> id();
            $table -> date('arrival_date');
            $table -> date('shipment_date')->nullable();
            $table->unsignedBigInteger('client_id');
            $table-> foreign('client_id')->references('id')->on('customers');
            $table -> string('serial_number');
            $table -> string('sales_worker');
            $table -> string('lab_worker');
            $table -> string('warehouse_address');
            $table -> string('priority');
            $table -> string('initial_diagnosis');
            $table->timestamps(); // created_at y updated_at




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        
    }
};
