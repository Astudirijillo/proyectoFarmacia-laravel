<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EntradaStockResources extends JsonResource
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
            'rutProveedor'=>$this.rutProveedor,
            'cantRecibidas'=>$this.cantRecibida,
            'fechaRecepcion'=>$this.fechaRecepcion,
            'fechaVencimiento'=>$this.fechaVencimiento,
        ];
    }
}
