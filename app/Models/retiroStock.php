<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class retiroStock extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'codProducto', 'cantRetirada', 'fechaRetiro',
        'motivoRetiro', 'idUsuario', 'fechaCreacion'];
}
