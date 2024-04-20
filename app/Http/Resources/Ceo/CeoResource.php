<?php

namespace App\Http\Resources\Ceo;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class CeoResource extends JsonResource
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
            'cargo_id' =>$this->resource->cargo_id,
            'name' =>$this->resource->name,
            'cargoceo_name' =>$this->resource->cargoceo_name,
            // "cargo"=>$this->resource->cargo ? [
            //     "id"=>$this->resource->cargo->id,
            // ]:NULL,
            "avatar"=> $this->resource->avatar ? env("APP_URL")."storage/".$this->resource->avatar : null,
            // "avatar"=> $this->resource->avatar ? env("APP_URL").$this->resource->avatar : null,
            
            "created_at"=>$this->resource->created_at ? Carbon::parse($this->resource->created_at)->format("Y-m-d h:i A") : NULL,
        ];
    }
}
