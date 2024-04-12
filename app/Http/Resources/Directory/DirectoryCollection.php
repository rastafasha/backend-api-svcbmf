<?php

namespace App\Http\Resources\Directory;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DirectoryCollection extends ResourceCollection
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
            "data"=> DirectoryResource::collection($this->collection)
        ];
    }
}
