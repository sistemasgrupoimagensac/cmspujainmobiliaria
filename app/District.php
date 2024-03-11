<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = "districts";
    protected $fillable = ['district','id','department_id','province_id'];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
