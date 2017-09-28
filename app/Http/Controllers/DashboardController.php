<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Site;
use App\Siteinfo;
use App\Category;

class DashboardController extends Controller
{
    private $activeMenu;
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:Admin~Editor'); //restrict all except super suer
        $this->activeMenu = "Dashboard";
    }

    public function index ()
    {
        $site_id = auth()->user()->site_id;
        $siteinfo = Siteinfo::where('site_id', $site_id)->where('language', session('currentLanguage'))->get();
        $posts = Post::where('site_id', $site_id)->where('language', session('currentLanguage'))->get();
        $categories = Category::where('site_id', $site_id)->where('language', session('currentLanguage'))->get();

    	return view('cms.index')->with('activeMenu' , $this->activeMenu)->with('posts', $posts)->with('siteinfo', $siteinfo)->with('categories', $categories);
    	
    }
    
    public function setwelcome(Request $request)
    {
        $site_id = auth()->user()->site_id;
        $siteinfo = Siteinfo::where('site_id', $site_id)->where('language', session('currentLanguage'))->first();
        $siteinfo->welcome = $request->welcomepost;
        $siteinfo->save();
        return back();
    }
    
    public function setmessage(Request $request)
    {
        $site_id = auth()->user()->site_id;
        $siteinfo = Siteinfo::where('site_id', $site_id)->where('language', session('currentLanguage'))->first();
        $siteinfo->message1 = $request->message1;
        $siteinfo->message2 = $request->message2;
        $siteinfo->save();
        return back();
    }
    
    public function setnotificationcategory(Request $request)
    {
        $site_id = auth()->user()->site_id;
        $siteinfo = Siteinfo::where('site_id', $site_id)->where('language', session('currentLanguage'))->first();
        $siteinfo->notificationcategory = $request->notificationcategory;
        $siteinfo->save();
        return back();
    }
    
    
}
