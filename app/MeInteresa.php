<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeInteresa extends Model
{
    protected $table = "me_interesa";
    protected $fillable = ['user_puja_id','product_id','status'];

    public function user(){
        return $this->belongsTo(UserPuja::class,'user_puja_id');
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
