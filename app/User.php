<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function departments()
    {
        return $this->hasMany('App\Department');
    }

    public function titles()
    {
        return $this->hasMany('App\Title');
    }

    public function employees()
    {
        return $this->hasMany('App\Employee');
    }

    public function pensions()
    {
        return $this->hasMany('App\Pension');
    }
}
