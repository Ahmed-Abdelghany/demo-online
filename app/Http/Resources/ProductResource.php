<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $creator = $this->user ? ( new UserResource($this->user)) : null;

        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'discount' => $this->discount,
            'stock' => $this->stock,
            'category' => $this->category,
            'brand' => $this->brand,
            'image' => $this->images->first->id, //to get the first image only
            'owner' => $creator,
        ];
    }
}
