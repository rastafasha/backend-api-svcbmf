<?php

namespace App\Http\Resources\DirRegional;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class DirRegionalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" =>$this->resource->id,
            "user_id" =>$this->resource->user_id,
            'title' =>$this->resource->title,
            'presidente' =>$this->resource->presidente,
            'secretario' =>$this->resource->secretario,
            'tesorero' =>$this->resource->tesorero,
            'vocal' =>$this->resource->vocal,
            'primerSuplente' =>$this->resource->primerSuplente,
            
            "created_at"=>$this->resource->created_at ? Carbon::parse($this->resource->created_at)->format("Y-m-d h:i A") : NULL,
        ];
    }
}
