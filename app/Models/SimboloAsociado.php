<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimboloAsociado extends Model
{
    protected $table = 'simbolos_asociados';
    use HasFactory;
    protected $fillable = ['id', 'codigo', 'descripcion'];
}
