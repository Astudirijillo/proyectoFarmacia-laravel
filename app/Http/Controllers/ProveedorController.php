<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoResource;
use Illuminate\Http\Request;
use App\Http\Resources\ProveedorResource;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedor = Proveedor::orderBy('razonSocial')->get();
        return ProveedorResource::collection($proveedor);
    }

    public function show(Proveedor $proveedor)
    {
        return new ProveedorResource($proveedor);

    }

    protected function validateRequest()
    {
        return request()->validate([
            'razonSocial' => 'required|max:50',
            'rutEmpresa' => 'required|max:18',
            'nroTelefoncio' => 'required|max:20',
            'correoElectronico' => 'required|min:40|max:50',
            'direccion' => 'required|min:25|max:50',
            'idUsuario' => 'required|integer',
            'fechaCreacion' => 'required|datetime',
            'fechaModificacion' => 'required|datetime',
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
