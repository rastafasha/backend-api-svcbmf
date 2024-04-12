<?php

namespace App\Http\Resources\Banners\Banncuadrados;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class BancuadradoResource extends JsonResource
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
            'titulo' =>$this->resource->titulo,
            'target' =>$this->resource->target,
            'enlace' =>$this->resource->enlace,
            'is_active' =>$this->resource->is_active,
            // "image"=> $this->resource->image ? env("APP_URL")."storage/".$this->resource->image : null,
            "image"=> $this->resource->image ? env("APP_URL").$this->resource->image : null,
            
            "created_at"=>$this->resource->created_at ? Carbon::parse($this->resource->created_at)->format("Y-m-d h:i A") : NULL,
        ];
    }
}
