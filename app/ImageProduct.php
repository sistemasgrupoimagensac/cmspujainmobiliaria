<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $table = "images_product";
    protected $fillable = ['product_id','url_image','status','created_at','updated_at'];
    
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}