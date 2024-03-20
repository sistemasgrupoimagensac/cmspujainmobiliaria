<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deparment extends Model
{  
    protected $table = 'departments';
    protected $fillable = ['deparment','status'];
}
