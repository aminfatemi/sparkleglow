<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->belongsTo('App\User');
    }
}
=======
=======
>>>>>>> 18cd3147... Authentican & relationships

        //the post has a relationship with the user and it belongs to the user
        return $this->belongsTo('App\User');
    }
<<<<<<< HEAD
}
>>>>>>> refs/remotes/origin/master
=======
}
>>>>>>> 18cd3147... Authentican & relationships
