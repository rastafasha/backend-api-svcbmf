<?php

namespace App\Http\Resources\Documento;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DocumentosCollection extends ResourceCollection
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
            "data"=> DocumentosResource::collection($this->collection)
        ];
    }
}
