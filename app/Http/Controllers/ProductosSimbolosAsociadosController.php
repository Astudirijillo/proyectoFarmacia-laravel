<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoResource;
use Illuminate\Http\Request;
use App\Http\Resources\ProductoSimboloAsociadoResource;
use App\Models\ProductoSimboloAsociado;

class ProductosSimbolosAsociadosController extends Controller
{
    public function index()
    {
        $productoSimboloAsociado = Proveedor::orderBy('idProducto')->get();
        return ProductoSimboloAsociadoResource::collection($productoSimboloAsociado);
    }

    public function show(ProductoSimboloAsociado $productoSimboloAsociado)
    {
        return new ProductoSimboloAsociadoResource($productoSimboloAsociado);
    }

    protected function validateRequest()
    {
        return request()->validate([
            'idProducto' => 'required|integer',
            'idSimbolo' => 'required|integer',
        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $productoSimboloAsociado = ProductoSimboloAsociado::create($data);
        return new ProductoSimboloAsociadoResource($productoSimboloAsociado);
    }

    public function update(ProductoSimboloAsociado $productoSimboloAsociado)
    {
        $data = $this->validateRequest();
        $productoSimboloAsociado -> update($data);
        return new ProductoSimboloAsociadoResource($productoSimboloAsociado);
    }

    public function destroy(ProductoSimboloAsociado $productoSimboloAsociado)
    {
        $productoSimboloAsociado -> delete();
        return response()->noContent();
    }
}
