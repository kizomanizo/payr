<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * Get the departments for the company.
     */
    public function departments()
    {
        return $this->hasMany('App\Department');
    }
}
