<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siteinfo extends Model
{
    protected $guarded =['id'];
    protected $table = "siteinfo";

    public static function siteinfo($id)
    {
    	$siteinfo = static::where('site_id', $id)->get();
    	return $siteinfo[0];
    }
}
