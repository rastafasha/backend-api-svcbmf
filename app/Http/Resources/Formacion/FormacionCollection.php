<?php

namespace App\Http\Resources\Formacion;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FormacionCollection extends ResourceCollection
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
            "data"=> FormacionResource::collection($this->collection)
        ];
    }
}
