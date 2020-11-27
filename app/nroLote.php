<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nroLote extends Model
{
    use HasFactory;
    protected $fillable = [ 'id', 'idEntradaStock', 'nroLote'];
}
