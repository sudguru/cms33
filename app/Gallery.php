<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = ['id'];
    public function photos()
    {
    	return $this->hasMany('App\Pic', 'gallery_id');
    }

    public function site()
    {
    	return $this->belongsTo('App\Site', 'site_id');
    }
}
