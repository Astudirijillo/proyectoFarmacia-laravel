<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class simboloAsociado extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'codigo','descripcion'];
}

