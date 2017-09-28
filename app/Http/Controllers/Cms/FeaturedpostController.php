<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Featuredpost;
use App\Post;
class FeaturedpostController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor');
		$this->activeMenu = "Posts";
	}

	public function index()
	{
		$featuredposts = Featuredpost::where('site_id', auth()->user()->site_id)->where('language', session('currentLanguage'))->orderBy('display_order')->get();
		return view('cms.posts.featuredposts')->with('featuredposts', $featuredposts);
	}

	public function store(Post $post)
	{
		//dd($post->featuredposts->count());
		if($post->featuredpost and $post->featuredpost->count() > 0)
		{
			//dd($post->id);
			Featuredpost::where('post_id', $post->id)->delete();
			//reorder
			$featuredposts = Featuredpost::where('site_id', auth()->user()->site_id)->where('language', session('currentLanguage'))->get();
			$i = 0;
			foreach($featuredposts as $featuredpost)
			{
				$i++;
				$featuredpost->display_order = $i;
				$featuredpost->save();
			}
		}
		else
		{

			Featuredpost::create([
				'post_id' => $post->id,
				'site_id' => auth()->user()->site_id,
				'language' => session('currentLanguage'),
				'display_order' => auth()->user()->site->featuredposts->count() + 1
				]);
		}
		return back();
	}

	public function destroy($featuredpost)
	{
		Featuredpost::destroy($featuredpost);
		$featuredposts = Featuredpost::where('site_id', auth()->user()->site_id)->where('language', session('currentLanguage'))->get();
			$i = 0;
			foreach($featuredposts as $featuredpost)
			{
				$i++;
				$featuredpost->display_order = $i;
				$featuredpost->save();
			}
		return back();
	}

	public function reorder()
	{
		Featuredpost::where('language', session('currentLanguage'))
		->where('site_id', auth()->user()->site_id)
		->where('display_order', request('oldorder'))
		->update(['display_order' => -9]);

		if(request('neworder') < request('oldorder')) {
			Featuredpost::where('language', session('currentLanguage'))
			->where('site_id', auth()->user()->site_id )
			->where('display_order', '>=', request('neworder'))
			->where('display_order' , '<', request('oldorder'))
			->increment('display_order');
		}
		else
		{
			Featuredpost::where('language', session('currentLanguage'))
			->where('site_id', auth()->user()->site_id )
			->where('display_order', '>', request('oldorder'))
			->where('display_order' , '<=', request('neworder'))
			->decrement('display_order');
		}

		Featuredpost::where('language', session('currentLanguage'))
		->where('site_id', auth()->user()->site_id)
		->where('display_order', -9)
		->update(['display_order' => request('neworder')]);

		return 'successs';
	}
}
