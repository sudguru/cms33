<?php
namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Site;

class SettingsController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor');
		$this->activeMenu = "Settings";
	}

	public function googlemap()
	{
		$site = Site::find(auth()->user()->site_id);
		return view('cms.settings.googlemap')->with('activeMenu' , $this->activeMenu)->with('site' , $site);
	}

	public function savegooglemap(Request $request)
	{
		$site = Site::find(auth()->user()->site_id);
		$site->latlng = $request->latlng;
		$site->save();
		return $request;
	}

	public function generalsettings()
	{
		$site = Site::find(auth()->user()->site_id);
		return view('cms.settings.generalsettings')->with('activeMenu' , $this->activeMenu)->with('site' , $site);
	}

	public function savegeneralsettings()
	{
		$this->validate(request(), [
            'hitCount' => 'required|numeric',
            'showHitCount' => 'required|numeric',
            'postPerPage' => 'required|numeric'
        ]);

		$site = Site::find(auth()->user()->site_id);
		$site->hitCount = request('hitCount');
		$site->showHitCount = request('showHitCount');
		$site->postPerPage = request('postPerPage');
		$site->save();
		session()->flash('flashmessage', 'Settings Saved!');
		return back();
	}

	public function analytics()
	{
		$site = Site::find(auth()->user()->site_id);
		return view('cms.settings.analytics')->with('activeMenu' , $this->activeMenu)->with('site' , $site);
	}

	public function socialsettings()
	{
		$site = Site::find(auth()->user()->site_id);
		$socials = $site->socials;
		return view('cms.settings.socials')->with('activeMenu' , $this->activeMenu)->with('socials' , $socials);
	}

	public function savesocialsettings(Request $request)
	{
		$site = Site::find(auth()->user()->site_id);
		$site->latlng = $request->latlng;
		$site->save();
		return $request;
	}

	public function editsocialsettings()
	{
		$site = Site::find(auth()->user()->site_id);
		$socials = $site->socials;
		for($i = 0; $i < sizeof($socials); $i++) {
			if($socials[$i]['name'] == request('id')) $socials[$i]['pageurl'] = request('val');
		}
		$site->socials = $socials;
		$site->save();
	}

	public function sharingcode()
	{
		//$site = Site::find(auth()->user()->site_id);
		return view('cms.settings.sharingcode')->with('activeMenu' , $this->activeMenu);//->with('site' , $site);
	}
}
