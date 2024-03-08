<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusProperty extends Model
{   
    protected $fillable = ['name','description','status'];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
