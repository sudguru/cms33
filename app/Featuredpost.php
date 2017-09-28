<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featuredpost extends Model
{
    protected $guarded = ['id'];

    public function post()
    {
        return $this->hasOne('App\Post', 'id','post_id');
    }
}
