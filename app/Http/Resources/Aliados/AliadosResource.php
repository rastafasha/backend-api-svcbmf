<?php

namespace App\Http\Resources\Aliados;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AliadosResource extends JsonResource
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
            'is_active' =>$this->resource->is_active,
            'enlace' =>$this->resource->enlace,
            'target' =>$this->resource->target,
            // "image"=> $this->resource->image ? env("APP_URL")."storage/".$this->resource->image : null,
            "image"=> $this->resource->image ? env("APP_URL").$this->resource->image : null,
            
            "created_at"=>$this->resource->created_at ? Carbon::parse($this->resource->created_at)->format("Y-m-d h:i A") : NULL,
        ];
    }
}
