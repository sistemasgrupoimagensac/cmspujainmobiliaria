<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="users";
    protected $fillable = [
        'id_rol','district_id','name','type_document','document', 'email','birthdate','direction','phone','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function rol(){
        return $this->belongsTo(Rol::class,'id_rol');
    }
    public function meInteresa(){
        return $this->hasMany(MeInteresa::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class,'district_id');
    }
}
