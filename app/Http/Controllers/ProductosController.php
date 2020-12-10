<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProductoResource;
use App\Http\models\Producto;

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

    public function validateRequest()
    {
        return request()->validate([

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
