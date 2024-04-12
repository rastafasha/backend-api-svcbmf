<?php

namespace App\Http\Resources\Fotoceo;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FotoceoCollection extends ResourceCollection
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
            "data"=> FotoceoResource::collection($this->collection)
        ];
    }
}
