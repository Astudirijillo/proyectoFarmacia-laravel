<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockProducto extends Model
{
    protected $table = 'stock_producto';
    use HasFactory;
    protected $fillable = ['codProducto', 'undStock', 'rutProveedor', 'nroLoteIngreso',
        'fechaVencimiento'];
}
