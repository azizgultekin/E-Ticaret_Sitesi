<?php

namespace App\Models;

use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends=['parent'];

    #One To Many
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    #One To Many
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    #Many To One
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

    public function imagess()
    {
        return $this->hasMany(Image::class);
    }
}
