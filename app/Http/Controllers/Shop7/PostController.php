<?php
namespace App\Http\Controllers\Shop7;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Category;
use App\Product;
use App\Ad;
use App\Post;
class PostController extends Controller
{
    private $site_id;
	public function __construct()
	{
		$this->site_id = config('custom.frontsiteID');
	}

	public function index($categoryname, Category $category)
	{
		$posts = $category->posts()->where('site_id', $this->site_id)
		->where('language', session('currentLanguage'))
		->orderBy('display_order')
		->get();

		$homepagesideads = Ad::where('site_id', $this->site_id)->where('language', session('siteLanguage'))->where('position', 5)->orderBy('display_order')->get();

		return view('front.shop7.post-category')
		->with('posts' , $posts)
		->with('postcategory', $category)
		->with('homepagesideads' , $homepagesideads)
		->with('sisters' , Ad::sisters($this->site_id));
	}

	public function show($slug, Post $post)
	{
		$homepagesideads = Ad::where('site_id', $this->site_id)->where('language', session('siteLanguage'))->where('position', 5)->orderBy('display_order')->get();
		$category = $post->categories->first();
		return view('front.shop7.post')
		->with('post', $post)
		->with('postcategory', $category)
		->with('homepagesideads' , $homepagesideads)
		->with('sisters' , Ad::sisters($this->site_id));
	}

}
