<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'codProducto', 'marcaComercial', 'nombreCientifico',
        'idTipoProducto', 'bioequivOpc', 'idFormaFarmaceutica', 'simbolosAsociados'];
}
