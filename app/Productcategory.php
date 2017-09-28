<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productcategory extends Model
{
    protected $guarded = ['id'];
    //each category might have one parent
	public function parent() {
		return $this->belongsToOne(static::class, 'parent_id');
	}

  	//each category might have multiple children
	public function children() {
		return $this->hasMany(static::class, 'parent_id');
	}

	public function allCategories()
	{
		return $this::with(array(
    				'children' => function ($query) {
        			$query->orderBy('display_order', 'asc');
   		 			}
					))->whereNull('parent_id')
					->where( 'site_id' , auth()->user()->site_id )
					->where('language', session('currentLanguage'))
					->orderBy('display_order', 'asc')->get();
	}

	Public function products()
    {
        return $this->belongsToMany('App\Product','product_productcategory','productcategory_id','product_id');
    }

    public static function productcategories($id)
    {
    	return  static::with(array(
    				'children' => function ($query) {
        			$query->orderBy('display_order', 'asc');
   		 			}
					))->whereNull('parent_id')
					->where( 'site_id' , $id)
					->where('language', session('siteLanguage'))
					->orderBy('display_order', 'asc')->get();
    }
}
