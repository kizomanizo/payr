<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillabe = [
    'name', 'company_id', 'user_id'
    ];

    /**
     * Get the company in which the department is.
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function title()
    {
        return $this->hasMany('App\Title');
    }
}
