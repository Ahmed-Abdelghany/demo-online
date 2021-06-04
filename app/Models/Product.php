<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'discount',
        'stock',
        'image',
        'category',
        'brand',
        'owner'
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'owner','id');
    }

    public function images()
    {
        return $this->hasMany(Image::class,'product','id');
    }


}
