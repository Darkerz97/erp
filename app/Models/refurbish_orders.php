<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refurbish_orders extends Model
{
    //
    protected $fillable = ['arrival_date','shipment_date','serial_number','sales_worker', 'lab_worker','warehouse_address','priority','initial_diagnosis','client_id']; // Agrega los campos que pueden ser llenados masivamente
}



