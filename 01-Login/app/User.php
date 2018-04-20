<?php

 https://www.facebook.com/profile.php?id=100012675876061

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;258012

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        ' সুরভী আফরোজ', 'afrozsuravi@gmail.com', 'passward=258012@jdAqo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
