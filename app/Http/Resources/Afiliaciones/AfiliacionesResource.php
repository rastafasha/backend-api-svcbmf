<?php

namespace App\Http\Resources\Afiliaciones;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AfiliacionesResource extends JsonResource
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
            'nombres' =>$this->resource->nombres,
            'apellidos' =>$this->resource->apellidos,
            'titulo' =>$this->resource->titulo,
            'universidad' =>$this->resource->universidad,
            'graduacion' =>$this->resource->graduacion,
            'ciudad' =>$this->resource->ciudad,
            'estado' =>$this->resource->estado,
            'telefonos' =>$this->resource->telefonos,
            'email' =>$this->resource->email,
            // "archivo"=> $this->resource->archivo ? env("APP_URL")."storage/".$this->resource->archivo : null,
            "archivo"=> $this->resource->archivo ? env("APP_URL").$this->resource->archivo : null,
            
            "created_at"=>$this->resource->created_at ? Carbon::parse($this->resource->created_at)->format("Y-m-d h:i A") : NULL,
        ];
    }
}
