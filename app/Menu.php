<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
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

    public function allMenus($menuname)
	{
		//return $menuname
		return $this::with(array(
    				'children' => function ($query) {
        			$query->orderBy('display_order', 'asc');
   		 			}
					))->where('menu', $menuname)->whereNull('parent_id')
					->where( 'site_id' , auth()->user()->site_id )
					->where('language', session('currentLanguage'))
					->orderBy('display_order', 'asc')->get();
	}
}
