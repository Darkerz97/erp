<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dev_reg_model extends Model
{
    //
    protected $fillable = ['arrival_date','shimpent_date','serial_number','sales_worker', 'lab_worker','warehouse_address','priority','initial_diagnosis']; // Agrega los campos que pueden ser llenados masivamente
}



