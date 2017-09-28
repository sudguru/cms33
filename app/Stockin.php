<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockin extends Model
{
    protected $guarded = ['id'];

    public function color()
    {
    	return $this->belongsTo('App\Color', 'color_id');
    }

    public function size()
    {
    	return $this->belongsTo('App\Size', 'size_id');
    }
}
