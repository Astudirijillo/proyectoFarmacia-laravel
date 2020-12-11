<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimboloAsociado extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'codigo', 'descripcion'];
}
