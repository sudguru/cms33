<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Site;
class CurrencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:Super~Admin~Editor'); //restrict all except super suer
        $this->activeMenu = "Products";
    }

   
    public function index()
    {
        $site = Site::find(auth()->user()->site_id);
        $currencies = $site->currencies;
        return view('cms.products.currencyexchange')->with('activeMenu' , $this->activeMenu)->with('currencies' , $currencies);
    }

    public function store()
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
        return "Changes Updated";
    }
    

}