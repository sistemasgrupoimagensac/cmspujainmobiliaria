<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['rooms','garage','square_meters','bathrooms','price','district','image','id_category','id_status_property','description','status'];
    public function categories(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function statusProperty(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
