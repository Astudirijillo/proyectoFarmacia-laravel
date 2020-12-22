<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\EntradaStockResources;
use App\Models\entradaStock;

class EntradaStockController extends Controller
{
    public function index()
    {
        $entradasStock = entradaStock::orderby('rutProveedor')->get();
        return EntradaStockResources::collection($entradasStock);
    }

    public function show(EntradaStockResources $entradasStock)
    {
        return new EntradaStockResources($entradasStock);
    }

    protected function validateRequest()
    {
        return request() -> validate([
            'rutProveedor' => 'required|min:13',
            'codProducto' => 'required|min:13|max:14',
            'undRecibidas' => 'required|min:1',
            'fechaRecepcion' => 'required|date',
            'fechaVencimiento' => 'required|date',
        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $entradasStock = EntradaStock::create($data);
        return new EntradaStockResources($entradasStock);
    }

    public function update(entradaStock $entradasStock)
    {
        $data = $this->validateRequest();
        $entradasStock -> update($data);
        return new EntradaStockResources($entradasStock);
    }

    public function destroy(entradaStock $entradasStock)
    {
        $entradasStock -> delete();
        return response() -> noContent();
    }
}
