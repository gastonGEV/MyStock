<?php

namespace MyStock\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'barcode' => $this->barCode,
            'type' => $this->type->name,
            'name' => $this->name,
            'cantmin' => $this->cantMin,
            'stock' => $this->stock->cant,
            'cost' => $this->cost
        ];
    }
}
