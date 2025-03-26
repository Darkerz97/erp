<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class devices extends Model
{
    //
    protected $fillable = ['comercial_name','brand','model']; // Agrega los campos que pueden ser llenados masivamente
}
