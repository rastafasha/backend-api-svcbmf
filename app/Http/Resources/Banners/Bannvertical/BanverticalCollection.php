<?php

namespace App\Http\Resources\Banners\Bannvertical;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BanverticalCollection extends ResourceCollection
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
            "data"=> BanverticalResource::collection($this->collection)
        ];
    }
}
