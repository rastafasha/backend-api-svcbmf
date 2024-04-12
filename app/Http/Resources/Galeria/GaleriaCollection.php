<?php

namespace App\Http\Resources\Galeria;

use Illuminate\Http\Resources\Json\ResourceCollection;

class GaleriaCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "data"=> GaleriaResource::collection($this->collection)
        ];
    }
}
