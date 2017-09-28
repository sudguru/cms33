<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $guarded = ['id'];

    public static function colors($id)
    {
    	return static::where('site_id',$id)->get();
    }

    public function colorproducts()
    {
        return $this->belongsToMany('App\Product','color_product','color_id','product_id');
    }
}
