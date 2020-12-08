<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockProducto extends Model
{
    use HasFactory;
    protected $fillable = ['codProducto', 'undStock', 'rutProveedor', 'nroLoteIngreso',
        'fechaVencimiento', 'idUsuario', 'fechaCreacion', 'fechaModificacion'];
}
