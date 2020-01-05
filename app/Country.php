<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected function posts(){
        return $this->hasManyThrough('App\Post','App\User');
    }
}
