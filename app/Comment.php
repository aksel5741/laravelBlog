<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function post()
    {
        return $this->hasOne('App\Post','post_id');
    }

    public function user()
    {
        return $this->hasOne('App\User','author_id');
    }
}
