<?php
namespace App\Http\Controllers\Shop7;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Featuredproduct;
use App\Productcategory;
use App\Product;
use App\Ad;
use App\Site;


class HomeController extends Controller
{
	private $site_id;
	public function __construct()
	{
		$this->site_id = config('custom.frontsiteID');

	}

	public function index()
	{
		// \App::make('\App\Http\ViewComposers\CommonComposer');
		$bigsquares = Ad::where('site_id', $this->site_id)->where('language', session('siteLanguage'))->where('position', 1)->orderBy('display_order')->take(1)->get();
		$talls = Ad::where('site_id', $this->site_id)->where('language', session('siteLanguage'))->where('position', 2)->orderBy('display_order')->take(1)->get();
		$smallsquares = Ad::where('site_id', $this->site_id)->where('language', session('siteLanguage'))->where('position', 3)->orderBy('display_order')->take(2)->get();
		$popupad = Ad::where('site_id', $this->site_id)->where('language', session('siteLanguage'))->where('position', 7)->orderBy('display_order')->get();
		$homepagesideads = Ad::where('site_id', $this->site_id)->where('language', session('siteLanguage'))->where('position', 5)->orderBy('display_order')->get();
		$featuredproducts = Featuredproduct::where('site_id', $this->site_id)->orderBy('display_order')->get();
		return view('front.shop7.index')
		->with('bigsquares', $bigsquares)
		->with('talls', $talls)
		->with('smallsquares', $smallsquares)
		->with('popupad', $popupad)
		->with('featuredproducts', $featuredproducts)
		->with('homepagesideads', $homepagesideads);
	}
}