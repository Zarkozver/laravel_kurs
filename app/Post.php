<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;
    public $directory = '/images/';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'title',
        'body',
        'path'
    ];

    protected function photos(){
        return $this->morphMany('App\Photo','imageable');
    }

    protected function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }
    public function getPathAttribute($data){
        return $this->directory.$data;
    }
}
