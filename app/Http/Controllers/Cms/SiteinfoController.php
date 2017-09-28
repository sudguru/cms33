<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Siteinfo;
use Storage;
use Image;
class SiteinfoController extends Controller
{
    
    public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('allowOnly:Admin~Editor');
		$this->activeMenu = "Settings";
	}

	public function index() {

		$siteinfo = Siteinfo::where('site_id', auth()->user()->site_id)->where('language', session('currentLanguage'));
		if($siteinfo->count() == 0)
		{
			Siteinfo::create([
				'site_id' => auth()->user()->site_id,
				'language' => session('currentLanguage')
			]);
		}
		return view('cms.siteinfo.index')->with('activeMenu' , $this->activeMenu)->with('siteinfo' , $siteinfo->first());
	}

	public function store(Request $request)
	{

        Siteinfo::updateOrCreate(
        	['id' => $request->id],
        	[
            'site_id' => auth()->user()->site_id,
            'keywords' => request('keywords'),
            'description' => request('description'),
            'welcomemsg' => request('welcomemsg'),
            'company_name' => request('company_name'),
            'address' => request('address'),
            'city' => request('city'),
            'country' => request('country'),
            'phone' => request('phone'),
            'fax' => request('fax'),
            'email' => request('email'),
            'feedback_email' => request('feedback_email'),
            'working_hours' => request('working_hours'),
            'hp_title' => request('hp_title'),
            'language' => session('currentLanguage')
        ]);
        session()->flash('flashmessage', 'Site Infomation Saved !');
		return back();
	}

	public function siteinfosaveogimage(Request $request)
	{
		$this->validate($request, [
           'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=800',
        ]);
        $image = $request->file('photo');
		$time = time();
		$imagename = $time.'.'.$image->getClientOriginalExtension();

		//original
		$path = request()->file('photo')->storeAs('public/' . auth()->user()->site->siteUrl . '/images/original', $imagename);
		$path = basename($path);

		//800
		Storage::makeDirectory('public/' . auth()->user()->site->siteUrl . '/images/thumb_800');
			$input['imagename'] = $imagename;
			$destinationPath = storage_path('app/public/' . auth()->user()->site->siteUrl .'/images/thumb_800');
			$img = Image::make($image->getRealPath());
			$width = $img->width();
			$img->resize(800, 800, function ($constraint) {
	    		$constraint->aspectRatio();
				})->save($destinationPath.'/'.$input['imagename']);
		
		//Update Banner
		$siteinfo = Siteinfo::find($request->id);
        $siteinfo->og_image = $path;
        $siteinfo->save();


       	session()->flash('flashmessage', 'Sharing Image Saved !');
		return back();

	}

	public function siteinforemoveogimage(Request $request)
	{
		$siteinfo = Siteinfo::find($request->id);
        $siteinfo->og_image = '';
        $siteinfo->save();
        session()->flash('flashmessage', 'Sharing Image Revomed !');
		return back();
	}
}
