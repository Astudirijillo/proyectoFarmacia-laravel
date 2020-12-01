<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'codProducto'=> $this->codProducto,
            'marcaComercial'=>$this->marcaComercial,
            'nombreCientifico'=>$this->nombreCientifico,
            'idTipoProducto'=>$this->idTipoProducto,
            'bioequivOpc'=>$this->bioequivOpc,
            'idFormaFarmaceutica'=>$this->idFormaFarmaceutica,
            'simbolosAsociados'=>$this->simbolosAsociados,
        ];
    }
}
