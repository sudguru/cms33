<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Site;
use App\Ad;
use Storage;
use Image;
use DB;
class AdsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('allowOnly:Admin~Editor');
    $this->activeMenu = "Images";
  }


  public function index($pos) {
    $adtypes = auth()->user()->site->ads;
    //count each adtypes
    $counts = "";
    for($j = 0; $j < sizeof($adtypes); $j++) {
      $tp = $adtypes[$j]['pos'];
      $counts .= Ad::where('site_id', auth()->user()->site_id)->where('position', $tp)->where('language', session('currentLanguage'))->count() . ",";
    }
    $counts = rtrim($counts, ',');
    $aCounts = explode(",", $counts);
    //edn count

    if($pos == 0) $i = 0; else $i = $pos;

      $p = $adtypes[$i]['pos'];
      $w = $adtypes[$i]['width'];
      $h = $adtypes[$i]['height'];

    $ads = Ad::where('site_id', auth()->user()->site_id)->where('position', $p)->where('language', session('currentLanguage'))->orderBy('display_order')->get();
    return view('cms.ads.index')->with('activeMenu' , $this->activeMenu)->with('adtypes' , $adtypes)->with('ads' , $ads)->with('p' , $p)->with('w' , $w)->with('h' , $h)->with('aCounts' , $aCounts);
  }

  public function uploadimage(Request $request)
  {
    $this->validate($request, [
     'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     'adname' => 'required'
     ]);
    $image = $request->file('photo');
    $time = time();
    $imagename = $time.'.'.$image->getClientOriginalExtension();

    //original
    $path = request()->file('photo')->storeAs('public/' . auth()->user()->site->siteUrl . '/images/ads', $imagename);
    $path = basename($path);

    //1200px
    Storage::makeDirectory('public/' . auth()->user()->site->siteUrl . '/images/thumb_240');
    $input['imagename'] = $imagename;
    $destinationPath = storage_path('app/public/' . auth()->user()->site->siteUrl .'/images/thumb_240');
    $img = Image::make($image->getRealPath());
    $width = $img->width();
    $img->resize(240, 240, function ($constraint) {
          $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
    $count = Ad::where('site_id', auth()->user()->site_id)->where('position', request('pos'))->where('language', session('currentLanguage'))->count();
    //Create New Ad
      $ad = Ad::create([
        'site_id' => auth()->user()->site_id,
        'position' => request('pos'),
        'adpic' => $path,
        'adname' => request('adname'),
        'adtext' => request('adtext'),
        'adlink' => request('adlink'),
        'language' => session('currentLanguage'),
        'display_order' => $count + 1
      ]);
    
   
    $path = '/storage/' . auth()->user()->site->siteUrl . '/images/thumb_240/'. $path;

    //return json_encode(array('message' => 'BceOk', 'success' => true, 'path' => $path, 'adid' => $ad->id));
    return back()->with('in', $count);
  }

  public function update() {
      $ad = Ad::find(request('id'));
      if(request('wh') == 'adtext') $ad->adtext = request('val');
      if(request('wh') == 'adname') $ad->adname = request('val');
      if(request('wh') == 'adlink') $ad->adlink = request('val');
      $ad->save();
      $adnameid = 0;
      if(request('wh') == 'adname') $adnameid= request('id');
      return request('wh') . " updated~". $adnameid;
  }

  public function reorder()
  {
    Ad::where('position', request('pos'))
        ->where('language', session('currentLanguage'))
        ->where('site_id', auth()->user()->site_id)
        ->where('display_order', request('oldorder'))
        ->update(['display_order' => -9]);

    if(request('neworder') < request('oldorder')) {
    Ad::where('position', request('pos'))
        ->where('language', session('currentLanguage'))
        ->where('site_id', auth()->user()->site_id )
        ->where('display_order', '>=', request('neworder'))
        ->where('display_order' , '<', request('oldorder'))
        ->increment('display_order');
    }
    else
    {
      Ad::where('position', request('pos'))
        ->where('language', session('currentLanguage'))
        ->where('site_id', auth()->user()->site_id )
        ->where('display_order', '>', request('oldorder'))
        ->where('display_order' , '<=', request('neworder'))
        ->decrement('display_order');
    }

    Ad::where('position', request('pos'))
        ->where('language', session('currentLanguage'))
        ->where('site_id', auth()->user()->site_id)
        ->where('display_order', -9)
        ->update(['display_order' => request('neworder')]);

        return 'success';
  }




  public function destroy() {
    Ad::destroy(request('id'));
    //reorder
    $ads = Ad::where('position', request('pos'))
        ->where('language', session('currentLanguage'))
        ->where('site_id', auth()->user()->site_id)->orderBy('display_order')->get();
    $i = 1;
    foreach($ads as $ad)
    {
      $ad->display_order = $i;
      $ad->save();
      $i++;
    }
  }


}
