<?php

namespace App\Http\Resources\Blog;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
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
            'description' =>$this->resource->description,
            'slug' =>$this->resource->slug,
            'favorite_id' =>$this->resource->favorite_id,
            'is_featured' =>$this->resource->is_featured,
            'category_id'=>$this->resource-> category_id,
            // 'category_id'=>$this->resource-> category_id,
            //     'category'=>[
            //         'id'=> $this->resource->category->id,
            //         'name'=> $this->resource->category->nombre
            //     ],
            // 'author' =>$this->resource->author,
            "author"=>$this->resource->author ? [
                "id"=>$this->resource->author->id,
                "full_name"=>$this->resource->author->name.' '.$this->resource->author->surname,
            ]:NULL,
            'is_active' =>$this->resource->is_active,
            "avatar"=> $this->resource->avatar ? env("APP_URL")."storage/".$this->resource->avatar : null,
            // "avatar"=> $this->resource->avatar ? env("APP_URL").$this->resource->avatar : null,
            
            "created_at"=>$this->resource->created_at ? Carbon::parse($this->resource->created_at)->format("Y-m-d h:i A") : NULL,
        ];
    }
}
