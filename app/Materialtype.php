<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materialtype extends Model
{
    protected $guarded = ['id'];

    public static function materialtypes($id)
    {
    	return static::where('site_id',$id)->get();
    }

    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}
