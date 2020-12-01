<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'razonSocial', 'rut', 'correoElectronico',
        'direccion', 'nroTelefonico'];
}
