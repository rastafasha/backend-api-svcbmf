<?php

namespace App\Http\Resources\Cargo;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CargoCollection extends ResourceCollection
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
            "data"=> CargoResource::collection($this->collection)
        ];
    }
}
