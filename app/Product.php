<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $table="products";
    protected $fillable=['category_id','status_property_id','rooms','garage','square_meters','bathrooms','price','district','image','description','status'];
    public function categories(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function statusProperty(){
        return $this->belongsTo(StatusProperty::class,'status_property_id');
    }
}
