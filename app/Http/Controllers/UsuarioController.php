<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UsuarioResource;
use App\Http\Models\Usuario;

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

    public function validateRequest()
    {
        return request() -> validate([
            'nombre' => 'required|max:50',
            'apellidos' => 'required|max:50',
            'nroTelefonico' => 'required|max:15',
            'idTipoDocumento' => 'required|integer',
            'nroDocumento' => 'required|max:15',
            'correoElectronico' => 'required|max:15',
            'contraseña' => 'required|max:16',
            'esAdministrador' => 'required|boolean',
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
