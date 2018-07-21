<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

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

    public static function setUser()
    {
        return DB::table('users')
            ->select('First_Name', 'Last_Name', 'email', 'password', 'Phone')
            ->take(10)
            ->orderBy('users.id', 'DESC')
            ->get()->toArray();
    }
}