<?php

namespace App\Http\Resources\Banners\Bannhorizontal;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BanhorizontalCollection extends ResourceCollection
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
            "data"=> BanhorizontalResource::collection($this->collection)
        ];
    }
}
