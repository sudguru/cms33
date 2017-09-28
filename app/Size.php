<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $guarded = ['id'];

    public static function sizes($id)
    {
    	return static::where('site_id',$id)->get();
    }

    public function sizeproducts()
    {
        return $this->belongsToMany('App\Product','product_size','product_id','size_id');
    }
}
