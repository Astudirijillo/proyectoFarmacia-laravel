<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Resources\UsuarioResource;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::orderBy('primerNombre') -> get();
        return UsuarioResource::collection($usuarios);
    }

    public function show(Usuario $usuario)
    {
        return new UsuarioResource($usuario);
    }

    protected function validateRequest()
    {
        return request() -> validate([
            'primerNombre' => 'required|max:50',
            'apellidos' => 'required|max:50',
            'nroTelefonico' => 'required|max:15',
            'idTipoDoc' => 'required|integer',
            'nroDocumento' => 'required|min:10|max:30',
            'correoElectronico' => 'required|max:20',
            'contraseña' => 'required|max:16',
            'adminOpc' => 'boolean',
        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $usuario = Usuario::create($data);
        return new UsuarioResource($usuario);
    }

    public function update(Usuario $usuario)
    {
        $data = $this->validateRequest();
        $usuario -> update($data);
        return new UsuarioResource($usuario);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario -> delete();
        return response() -> noContent();
    }
}
