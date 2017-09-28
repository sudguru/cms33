<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = ['id'];

    public function products()
    {
    	return $this->hasMany('App\Product');
    }

    public static function brands($id)
    {
    	return static::where('site_id', $id)->get();
    }
}
