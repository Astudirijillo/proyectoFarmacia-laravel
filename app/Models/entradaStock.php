<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entradaStock extends Model
{
    protected $table = 'entrada_stock';
    use HasFactory;
    protected $fillable = ['id', 'codProducto', 'rutProveedor', 'cantRecibidas',
        'fechaRecepcion', 'fechaVencimiento'];
}
