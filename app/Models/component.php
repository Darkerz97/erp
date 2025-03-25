<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class component extends Model
{
    //
    protected $fillable = ['specs','quantity','part_number','package', 'description']; // Agrega los campos que pueden ser llenados masivamente
}


