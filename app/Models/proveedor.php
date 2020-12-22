<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $table = 'proveedor';
    use HasFactory;
    protected $fillable = ['id', 'razonSocial', 'rut', 'correoElectronico',
        'direccion', 'nroTelefonico'];
}
