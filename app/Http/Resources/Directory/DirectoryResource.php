<?php

namespace App\Http\Resources\Directory;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class DirectoryResource extends JsonResource
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
            'nombre' =>$this->resource->nombre,
            'surname' =>$this->resource->surname,
            'especialidad' =>$this->resource->especialidad,
            'universidad' =>$this->resource->universidad,
            'ano' =>$this->resource->ano,
            'org' =>$this->resource->org,
            'website' =>$this->resource->website,
            'email' =>$this->resource->email,
            'direccion' =>$this->resource->direccion,
            'direccion1' =>$this->resource->direccion1,
            'estado' =>$this->resource->estado,
            'ciudad' =>$this->resource->ciudad,
            'telefonos' =>$this->resource->telefonos,
            'tel1' =>$this->resource->tel1,
            'telhome' =>$this->resource->telhome,
            'telmovil' =>$this->resource->telmovil,
            'telprincipal' =>$this->resource->telprincipal,
            'facebook' =>$this->resource->facebook,
            'instagram' =>$this->resource->instagram,
            'twitter' =>$this->resource->twitter,
            'linkedin' =>$this->resource->linkedin,
            // "avatar"=> $this->resource->avatar ? env("APP_URL")."storage/".$this->resource->avatar : null,
            "avatar"=> $this->resource->avatar ? env("APP_URL").$this->resource->avatar : null,
            'vcard' =>$this->resource->vcard,
            'status' =>$this->resource->status,
            "created_at"=>$this->resource->created_at ? Carbon::parse($this->resource->created_at)->format("Y-m-d h:i A") : NULL,
        ];
    }
}
