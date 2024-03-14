<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $table="products";
    protected $fillable=['category_id','status_property_id','district_id','image_id','name','rooms','garage','square_meters','bathrooms','price','description','status'];
    public function categories(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function statusProperty(){
        return $this->belongsTo(StatusProperty::class,'status_property_id');
    }
    public function district(){
        return $this->belongsTo(District::class,'district_id');
    }
    public function meInteresa(){
        return $this->hasMany(MeInteresa::class);
    }
    public function imageProduct(){
        return $this->hasMany(ImageProduct::class);
    }

}
