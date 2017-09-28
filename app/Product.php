<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'productdetail' => 'array'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function site()
    {
    	return $this->belongsTo('App\Site', 'site_id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id');
    }

    public function materialtype()
    {
        return $this->belongsTo('App\Materialtype', 'materialtype_id');
    }

    public function productcategories()
    {
        return $this->belongsToMany('App\Productcategory','product_productcategory','product_id','productcategory_id');
    }


    public function featuredproduct()
    {
        return $this->hasOne('App\Featuredproduct', 'product_id');
    }

    public function productsizes()
    {
        return $this->belongsToMany('App\Size','product_size','product_id','size_id');
    }

    public function productcolors()
    {
        return $this->belongsToMany('App\Color','color_product');
    }

    public function productprices()
    {
        return $this->hasMany('App\Productprice');
    }
    
    public function productimages()
    {
        return $this->hasMany('App\Productimage');
    }

    public function stockins()
    {
        return $this->hasMany('App\Stockin');
    }





}
