<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
