<?php
namespace App\Http\Controllers\Shop7;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Productcategory;
use App\Product;
use App\Ad;
use App\Site;
use App\Siteinfo;

class CommonController extends Controller
{
	private $site_id;
	public function __construct()
	{
		$this->site_id = config('custom.frontsiteID');
	}

	public function dailydeals()
	{
		$homepagesideads = Ad::where('site_id', $this->site_id)->where('language', session('siteLanguage'))->where('position', 5)->orderBy('display_order')->get();

		return view('front.shop7.dailydeal')
		->with('homepagesideads' , $homepagesideads)
		->with('sisters' , Ad::sisters($this->site_id));
	}
}