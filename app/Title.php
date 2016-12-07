<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    // This makes the child row in foreign keys fillable
    protected $fillabe = [
    'name', 'salary', 'department_id', 'user_id'
    ];
    
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
