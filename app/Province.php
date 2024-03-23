<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = "provinces";
    protected $fillable = ['province','department_id','status'];

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id');
    }
}
