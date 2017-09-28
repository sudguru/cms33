<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $guarded = ['id'];

	public function parent() {
		return $this->belongsToOne(static::class, 'parent_id');
	}

  //each category might have multiple children
	public function children() {
		return $this->hasMany(static::class, 'parent_id');
	}

	public function fields()
	{
		return $this->hasMany('App\Customfield','category_id');
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


	public function posts()
	{
	        return $this->belongsToMany('App\Post', 'category_post','category_id','post_id');
	}

	public static function faqs($id)
	{
		return static::find(3)->posts()->where('site_id', $id)->get();
	}
	
}
