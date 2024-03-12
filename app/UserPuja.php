<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPuja extends Model
{
    protected $table ="users_puja";
    protected $fillable = [
        'name', 'email', 'password','birthdate','document','type_document'
    ];
    public function meInteresa(){
        return $this->hasMany(MeInteresa::class);
    }
}
