<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RetiroStockResources extends JsonResource
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
            'cantRetirada'=>$this.cantRetirada,
            'fechaRetiro'=>$this.fechaRetiro,
            'motivoRetiro'=>$this.motivoRetiro,
        ];
    }
}
