<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    #One To Many (inverse / Belongs To)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function shopcart()
    {
        return $this->hasMany(Shopcart::class);
    }

    public function orderitem()
    {
        return $this->hasMany(Orderitem::class);
    }
}
