<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = ['id'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function role()
    {
    	return $this->belongsTo('App\Role', 'role_id');
    }

    public function site()
    {
    	return $this->belongsTo('App\Site', 'site_id');
    }

    public function siteinfo()
    {
        return $this->hasMany('App\Siteinfo');
    }

    public function pics()
    {
        return $this->belongsToMany('App\Pic');
    }

    public function files()
    {
        return $this->belongsToMany('App\File');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function featuredpost()
    {
        return $this->hasOne('App\Featuredpost', 'post_id');
    }


    
}