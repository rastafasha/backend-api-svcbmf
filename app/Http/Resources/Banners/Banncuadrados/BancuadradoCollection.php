<?php

namespace App\Http\Resources\Banners\Banncuadrados;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BancuadradoCollection extends ResourceCollection
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
            "data"=> BancuadradoResource::collection($this->collection)
        ];
    }
}
