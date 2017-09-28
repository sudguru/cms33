<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'languages' => 'array',
        'ads' => 'array',
        'slides' => 'array',
        'currencies' => 'array',
        'socials' => 'array',
        'welcome' => 'array',
        'message1' => 'array',
        'message2' => 'array'
    ];
    public function siteusers()
    {
    	return $this->hasMany('App\User');
    }

    public function pages()
    {
    	return $this->hasMany('App\Page');
    }
    public function featuredposts()
    {
        return $this->hasMany('App\Featuredpost','site_id');
    }

    public function featuredproducts()
    {
        return $this->hasMany('App\Featuredproduct','site_id');
    }

    public function menus()
    {
        return $this->hasMany('App\Menu');
    }
    /*
    public function posts()
    {
    	return $this->hasMany('App\Post');
    }
    
    public function ads()
    {
    	return $this->hasMany('App\Ad');
    }

    public function galleries()
    {
    	return $this->hasMany('App\Gallery');
    }

    
    */

    // public static function vcCurrencies()
    // {
    //     return static::where('site_id')
    // }
    public static function getSiteId($surl)
    {
        return static::selectRaw('id')
                        ->where('siteUrl', $surl)
                        ->get();
    }

    
    public static function site($id)
    {
        $site =  static::where('id', $id)->get();
        return $site[0];
    }
}
