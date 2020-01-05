<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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


    protected function post(){

        return $this->hasOne('App\Post','id');

    }

    protected function roles(){
        return $this->belongsToMany('App\Role');
    }

    protected function photos(){
        return $this->morphMany('App\Photo','imageable');
    }

    public function getNameAttribute($data){
        return ucfirst($data);
    }
    public function setNameAttribute($data){
        $this->attributes['name'] = strtoupper($data); 
    }
    public static function scopeLatest($query){
        return $query->orderBy('id','desc')->get();
    }
}
