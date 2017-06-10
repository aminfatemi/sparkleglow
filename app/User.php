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

<<<<<<< HEAD
<<<<<<< HEAD
    //one to many relationship
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
=======
=======
>>>>>>> 18cd3147... Authentican & relationships
    public function posts(){
        //one ot many relationship
        return $this->hasMany('App\Post');
        }
 }
<<<<<<< HEAD
>>>>>>> refs/remotes/origin/master
=======
>>>>>>> 18cd3147... Authentican & relationships
