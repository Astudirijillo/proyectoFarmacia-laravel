<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\StockProductosResources;
use App\Http\Models\StockProductos;

class StockProductosController extends Controller
{
    public function index()
    {
        $stockProductos = StockProductos::orderBy('id') -> get();
        return StockProductosResources::collection($stockProductos);
    }

    public function show(StockProductos $stockProductos)
    {
        return new StockProductosResources($stockProductos);
    }

    public function validateRequest()
    {
        return request() -> validate([

        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $stockProductos = StockProductos::create($data);
        return new StockProductosResources($stockProductos);
    }

    public function update(StockProductos $stockProductos)
    {
        $data = $this->validateRequest();
        $stockProductos -> update($data);
        return new StockProductosResources($stockProductos);
    }

    public function destroy(StockProductos $stockProductos)
    {
        $stockProductos -> delete();
        return response() -> noContent();
    }
}
