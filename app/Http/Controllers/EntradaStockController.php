<?php

namespace App\Http\Controllers;

use App\Models\entradaStock;
use Illuminate\Http\Request;
use App\Http\Resources\EntradaStockResources;

class EntradaStockController extends Controller
{
    public function index()
    {
        $entradaStock = entradaStock::orderby('id')->get();
        return EntradaStockResources::collection($entradaStock);
    }

    public function show(EntradaStockResources $entradaStock)
    {
        return new EntradaStockResources($entradaStock);
    }

    public function validateRequest()
    {
        return request()->validate([
            'codProducto' => 'required|max:14',
            'rutProveedor' => 'required|min:9|max:10',

        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $entradaStock = EntradaStock::create($data);
        return new EntradaStockResources($entradaStock);
    }

    public function update(entradaStock $entradaStock)
    {
        $data = $this->validateRequest();
        $entradaStock -> update($data);
        return new EntradaStockResources($entradaStock);
    }

    public function destroy(entradaStock $entradaStock)
    {
        $entradaStock -> delete();
        return response() -> noContent();
    }
}
