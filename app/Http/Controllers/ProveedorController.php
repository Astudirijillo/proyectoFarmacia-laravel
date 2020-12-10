<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoResource;
use Illuminate\Http\Request;
use App\Http\Resources\ProveedorResource;
use App\Http\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedor = Proveedor::orderBy('razonSocial')->get();
        return ProveedorResource::collection($proveedor);
    }

    public function show(Proveedor $proveedor)
    {
        return new ProveedroResource($proveedor);

    }

    public function validateRequest()
    {
        return request()->validate([

        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $proveedor = Proveedor::create($data);
        return new ProveedorResource($proveedor);
    }

    public function update(Proveedor $proveedor)
    {
        $data = $this->validateRequest();
        $proveedor -> update($data);
        return new ProveedorResource($proveedor);
    }

    public function destroy(Proveedor $proveedor)
    {
        $proveedor -> delete();
        return response()->noContent();
    }
}
