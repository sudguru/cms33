<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
class SitetabsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:Super~Duper'); //restrict all except super suer
    }

    public function savelanguage(Site $site)
    {
    	$data = $site->languages;
    	$c = sizeof($data);
    	$data[$c]['name'] = request('lang_name');
    	$data[$c]['default'] = request('lang_default');
    	$data[$c]['caption'] = request('lang_caption');
    	$site->languages = $data;
    	$site->save();
    	return "OK";
    }

    public function deletelanguage(Site $site, $lang)
    {
        $data = $temp = $site->languages;
        for($i = 0; $i < sizeof($temp); $i ++)
        {
            if($temp[$i]['name'] == $lang) unset($data[$i]);
        }
        $data = array_values($data);
        $site->languages = $data;
        $site->save();
        return $data;
    }

    public function savead(Site $site)
    {
        $data = $site->ads;
        $c = sizeof($data);
        $data[$c]['pos'] = request('ads_pos');
        $data[$c]['name'] = request('ads_name');
        $data[$c]['width'] = request('ads_width');
        $data[$c]['height'] = request('ads_height');
        $data[$c]['nos'] = request('ads_nos');
        $site->ads = $data;
        $site->save();
        return "OK";
    }

    public function deletead(Site $site, $pos)
    {
        $data = $temp = $site->ads;
        for($i = 0; $i < sizeof($temp); $i ++)
        {
            if($temp[$i]['pos'] == $pos) unset($data[$i]);
        }
        $data = array_values($data);
        $site->ads = $data;
        $site->save();
        return $data;
    }

    public function savesocial(Site $site)
    {
        $data = $site->socials;
        $c = sizeof($data);
        $data[$c]['name'] = request('socials_name');
        $data[$c]['pageurl'] = request('socials_url');
        $site->socials = $data;
        $site->save();
        return "OK";
    }

    public function deletesocial(Site $site, $network)
    {
        $data = $temp = $site->socials;
        for($i = 0; $i < sizeof($temp); $i ++)
        {
            if($temp[$i]['name'] == $network) unset($data[$i]);
        }
        $data = array_values($data);
        $site->socials = $data;
        $site->save();
        return $data;
    }

     public function savecurrency(Site $site)
    {
        $data = $site->currencies;
        $c = sizeof($data);
        $data[$c]['symbol'] = request('currencies_symbol');
        $data[$c]['weight'] = request('currencies_weight');
        $site->currencies = $data;
        $site->save();
        return "OK";
    }

    public function deletecurrency(Site $site, $symbol)
    {
        $data = $temp = $site->currencies;
        for($i = 0; $i < sizeof($temp); $i ++)
        {
            if($temp[$i]['symbol'] == $symbol) unset($data[$i]);
        }
        $data = array_values($data);
        $site->currencies = $data;
        $site->save();
        return $data;
    }

    public function currencyexchangeform()
    {
        $site = Site::find(auth()->user()->site_id);
        $currencies = $site->currencies;
        return('cms.products.currencyexchange');
    }

    public function currencyexchange()
    {
        $site = Site::find(auth()->user()->site_id);
        $data = $site->currencies;
        for($i = 0; $i < sizeof($data); $i ++)
        {
            $symbol = $data[$i]['symbol'];
            $data[$i]['weight'] = request($symbol);
        }
        $site->currencies = $data;
        $site->save();
        return "OK";
    }
    

}