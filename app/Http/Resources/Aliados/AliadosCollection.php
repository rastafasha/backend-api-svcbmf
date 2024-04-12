<?php

namespace App\Http\Resources\Aliados;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AliadosCollection extends ResourceCollection
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
            "data"=> AliadosResource::collection($this->collection)
        ];
    }
}
