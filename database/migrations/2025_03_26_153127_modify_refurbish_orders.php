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
        Schema::table('Refurbish_orders',function (Blueprint $table) {
            $table->unsignedBigInteger('client_id')->nullable();
            $table-> foreign('client_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('Refurbish_orders',function(Blueprint $table){
            $table->dropForeign(['client_id']);
            $table->dropColumn('client_id');
        });
    }
};

