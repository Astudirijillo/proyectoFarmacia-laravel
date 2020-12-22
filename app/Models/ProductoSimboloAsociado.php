<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoSimboloAsociado extends Model
{
    protected $table = 'productoSimbolosAsociado';
    use HasFactory;
    protected $fillable = ['idProducto','idSimbolo'];
}
