<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    protected $fillable = ['id','company_name','company_location','company_email']; // Agrega los campos que pueden ser llenados masivamente
}
