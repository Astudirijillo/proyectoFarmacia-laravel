<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StockProductosResources extends JsonResource
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
            'id'=>$this.id,
            'codProducto'=>$this.codProducto,
            'undStock'=>$this.rutProveedor,
            'fechaVencimiento'=>$this.fechaVencimiento,
            'idUsuario'=>$this.idUsuario,
            'fechaCreacion'=>$this.fechaCreacion,
            'fechaModificacion'=>$this.fechaModificacion,

        ];
    }
}
