<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTurtle extends Model
{
    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function turtle()
    {
        return $this->belongsToMany('App\Turtle');
    }
}
