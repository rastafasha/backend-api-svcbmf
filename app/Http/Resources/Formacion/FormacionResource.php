<?php

namespace App\Http\Resources\Formacion;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class FormacionResource extends JsonResource
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
            'tipoPrograma' =>$this->resource->tipoPrograma,
            'aval' =>$this->resource->aval,
            'tiempoFormacion' =>$this->resource->tiempoFormacion,
            'frecuencia' =>$this->resource->frecuencia,
            'director' =>$this->resource->director,
            'is_active' =>$this->resource->is_active,
            'is_featured' =>$this->resource->is_featured,
            "created_at"=>$this->resource->created_at ? Carbon::parse($this->resource->created_at)->format("Y-m-d h:i A") : NULL,
        ];
    }
}
