<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table ='users';

    protected $fillable = [
        'nama', 'email', 'password', 'peranan', 'bahagian', 'jawatan', 'unit', 'no_ic', 'no_tel', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function bahagians()
    {
        return $this->hasOne('App\LookupBahagian', 'id', 'bahagian');
    }


    public function jawatans()
    {
        return $this->hasOne('App\LookupJawatan', 'id', 'jawatan');
    }
}
