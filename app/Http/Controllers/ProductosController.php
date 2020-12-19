<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProductoResource;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function index()
    {
        $producto = Producto::orderBy('codProducto')->get();
        return ProductoResource::collection($producto);
    }

    public function show(ProductoResource $producto)
    {
        return new ProductoResource($producto);
    }

    protected function validateRequest()
    {
        return request()->validate([
            'codProducto' => 'required|min:13|max:14',
            'marcaComercial' => 'required|max:50',
            'nombreCientifico' => 'required|max:50',
            'idTipoProducto' => 'required|integer',
            'esBioequivalente' => 'required|boolean',
            'idFormatoFarmaceutico' => 'required|integer',
            'idUsuario' => 'required|integer',
            'fechaCreacion' => 'required|datetime',
            'fechaModificacion' => 'required|datetime',
        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $producto = Producto::create($data);
        return new ProductoResource($producto);
    }

    public function update(Producto $producto)
    {
        $data = $this->validateRequest();
        $producto -> update($data);
        return new ProductoResource($producto);
    }

    public function destroy(Producto $producto)
    {
        $producto -> delete();
        return response() -> noContent();
    }
}
