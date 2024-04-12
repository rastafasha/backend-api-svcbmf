<?php

namespace App\Http\Resources\Afiliaciones;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AfiliacionesCollection extends ResourceCollection
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
            "data"=> AfiliacionesResource::collection($this->collection)
        ];
    }
}
