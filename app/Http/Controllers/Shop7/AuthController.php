<?php
namespace App\Http\Controllers\Shop7;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Site;
use App\User;
use App\Ad;
class AuthController extends Controller
{
	private $site_id;
	public function __construct()
	{
		$this->site_id = config('custom.frontsiteID');
	}

	public function index()
	{
		$homepagesideads = Ad::where('site_id', $this->site_id)->where('language', session('siteLanguage'))->where('position', 5)->orderBy('display_order')->get();

		return view('front.shop7.login')
		->with('homepagesideads' , $homepagesideads)
		->with('sisters' , Ad::sisters($this->site_id));
	}

	public function login()
	{
		return ('login');
	}

	public function create()
	{
		$homepagesideads = Ad::where('site_id', $this->site_id)->where('language', session('siteLanguage'))->where('position', 5)->orderBy('display_order')->get();

		return view('front.shop7.register')
		->with('homepagesideads' , $homepagesideads)
		->with('sisters' , Ad::sisters($this->site_id));
	}

	public function store()
	{
		return ('signup');
	}
}