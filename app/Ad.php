<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
	protected $guarded = ['id'];
    protected $casts = [
        'adtexts' => 'array',
        'adlinks' => 'array',
    ];

    public static function sisters($id)
    {
    	return static::where('site_id', $id)->where('language', session('siteLanguage'))->where('position', 4)->orderBy('display_order')->get();
    }
}
//model
/*
id
adname
adpic
adtexts {"english":"", nepali:""}
adlinks
site_id
*/