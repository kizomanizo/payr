<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public function title()
    {
        return $this->belongsTo('App\Title');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
