<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    protected $fillable = ['picpath', 'lg', 'md','sm', 'xs', 'site_id'];

    protected $casts = [
    'captions' => 'array'
    ];

    public function posts()
    {
        return $this->belongsToMany('App\Post', 'pic_post', 'pic_id', 'post_id');
    }


    public function updatecaption($caption, $currentlanguage)
    {
        $languages = auth()->user()->site->languages;

        $captions = $this->captions;
        if(sizeof($captions) == 0)
        {
            for($i = 0; $i < sizeof($languages); $i++)
            {
                $captions[0][$languages[$i]['name']] = "";
            }
        }
        $captions[0][$currentlanguage] = $caption ;
        $this->captions = $captions;
        $this->save();
    }
}
