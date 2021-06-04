<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable =[
      'main'
    ];
    public function productImages()
    {
        return $this->belongsTo(Product::class,'product','id');
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'product' => $this->product,
            'image' => $this->image,
            'color' => $this->color,
        ];
    }
}
