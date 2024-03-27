<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = "districts";
    protected $fillable = ['id','district','department_id','province_id'];
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function user()
    {
        return $this->hasMany(User::class,'id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class,'department_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class,'province_id');
    }
}
