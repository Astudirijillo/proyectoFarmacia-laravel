<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class retiroStock extends Model
{
    protected $table = 'retiro_stock';
    use HasFactory;
    protected $fillable = ['id', 'primerNombre', 'apellidos', 'idTipoDoc', 'nroDoc',
        'correoElectronico', 'contraseña','nroTelefonico', 'adminOpc'];
}
