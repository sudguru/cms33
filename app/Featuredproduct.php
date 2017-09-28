<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featuredproduct extends Model
{
   	protected $guarded = ['id'];

   	public function product()
    {
        return $this->hasOne('App\Product', 'id','product_id');
    }
}
