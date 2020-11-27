<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'primerNombre', 'apellidos', 'idTipoDoc', 'nroDoc',
        'correoElectronico', 'contraseña','nroTelefonico', 'adminOpc'];
}
