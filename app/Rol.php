<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'rol','description','status'
    ];
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
