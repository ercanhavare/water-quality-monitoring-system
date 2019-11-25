<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turtle extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function turtleSensorsData(){
        return $this->hasMany('App\TurtleSensorsData');
    }
}
