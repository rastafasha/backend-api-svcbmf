<?php

namespace App\Http\Resources\DirRegional;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DirRegionalCollection extends ResourceCollection
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
            "data"=> DirRegionalResource::collection($this->collection)
        ];
    }
}
