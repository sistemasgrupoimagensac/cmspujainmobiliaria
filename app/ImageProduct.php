<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $table = "images_product";
    protected $fillable = ['url_image','status'];
    public function product(){
        return $this->hasMany(Product::class);
    }
}
