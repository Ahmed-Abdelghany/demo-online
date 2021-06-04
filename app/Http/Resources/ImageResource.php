<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $productImages = $this->productImages ? (new ProductResource($this->productImages)) : null;
        return [
            'id' => $this->id,
            'product' => $productImages,
            'image' => $this->image,
            'color' => $this->color,
        ];
    }
}
