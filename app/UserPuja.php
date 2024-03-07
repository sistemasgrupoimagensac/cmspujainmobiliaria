<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPuja extends Model
{
    protected $table ="user_puja";
    protected $fillable = [
        'name', 'email', 'password','birthdate','document','type_document'
    ];
}
