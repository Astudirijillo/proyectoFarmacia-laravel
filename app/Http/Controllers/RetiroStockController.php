<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\RetiroStockResources;
use App\Models\RetiroStock;

class RetiroStockController extends Controller
{
    public function index()
    {
        $retiroStock = RetiroStock::orderBy('id') -> get();
        return RetiroStockResources::collection($retiroStock);
    }

    public function show(RetiroStock $retiroStock)
    {
        return new RetiroStockResources($retiroStock);
    }

    protected function validateRequest()
    {
        return request() -> validate([
            'codProducto' => 'required|max:18',
            'cantRetiro' => 'required|min:1',
            'fechaRetiro' => 'required|date',
            'motivoRetiro' => 'required|max:100',
            'idUsuario' => 'required|integer',
            'fechaCreacion' => 'required|date'
        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $retiroStock = RetiroStock::create($data);
        return new RetiroStockResources($retiroStock);
    }

    public function update(RetiroStock $retiroStock)
    {
        $data = $this->validateRequest();
        $retiroStock -> update($data);
        return new RetiroStockResources($retiroStock);
    }

    public function destroy(RetiroStock $retiroStock)
    {
        $retiroStock -> delete();
        return response() -> noContent();
    }
}
