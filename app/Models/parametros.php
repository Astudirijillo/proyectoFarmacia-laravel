<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parametros extends Model
{
    protected $table = 'parametros';
    use HasFactory;
    protected $fillable = ['id', 'codigo', 'descripcion'];
}
