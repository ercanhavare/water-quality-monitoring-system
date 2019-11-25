<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurtleSensorsData extends Model
{
    public function turtle()
    {
        $this->belongsTo('App\Turtle');
    }
}
