<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	// This makes the child row in foreign keys fillable
    protected $fillabe = [
    'name', 'address', 'contacts'
    ];

    /**
     * Get the departments for the company.
     */
    public function departments()
    {
        return $this->hasMany('App\Department');
    }
}
