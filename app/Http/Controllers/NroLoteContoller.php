<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\NroLoteResources;
use App\Http\Model\nroLote;

class NroLoteContoller extends Controller
{
    public function index()
    {
        $nroLote = nroLote::orderBy('nroLote')->get();
        return ProductResource::collection($nroLote);
    }

    public function show(nroLote $nroLote)
    {
        return new nroLoteResources($nroLote);
    }

    public function validateRequest()
    {
        return request()->validate([

        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $nroLote = NroLote::create($data);
        return new NroLoteResources($nroLote);
    }

    public function update(nroLote $nroLote)
    {
        $data = $this->validateRequest();
        $nroLote ->update($data);
        return new NroLoteResources($nroLote);
    }

    public function destroy(nroLote $nroLote)
    {
        $nroLote -> delete();
        return responde() -> noContent();
    }
}
