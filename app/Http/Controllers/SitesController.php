<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\User;

class SitesController extends Controller
{
	private $activeMenu;
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:Super~Duper'); //restrict all except super suer
        $this->activeMenu = "Sites";
    }

   

    public function index() {

    	$sites = Site::all();
        //$sites = Site::paginate(10);
        //$sits = Site::simplePaginate(2); //next previous only
        //$sites = Site::withTrashed()->paginate(10);
        //Soft Delete in Site Model
    	return view('sites.index')->with('activeMenu' , $this->activeMenu)->with('sites' , $sites);
    }

    public function create() {
    	return view('sites.create')->with('activeMenu' , $this->activeMenu);
    }

    public function show(Site $site) {
    	return view('sites.show')->with('activeMenu' , $this->activeMenu)->with('site' , $site);
    }

    public function edit(Site $site){
        return view('sites.edit')->with('activeMenu' , $this->activeMenu)->with('site' , $site);
    }

    public function destroy($site) {
    	Site::destroy($site);
    	return back();
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'siteUrl' => 'required',
            'siteTitle' => 'required|min:3',
            'skinCSS' => 'required',
            'menus' => 'required|min:3'
        ]);
        Site::create([
            'siteUrl' => request('siteUrl'),
            'siteTitle' => request('siteTitle'),
            'skinCSS' => request('skinCSS'),
            'menus' => request('menus'),
            'gakey' => request('gakey'),
        ]);
        return redirect('/sites');
    }

    public function update(Site $site)
    {
        $this->validate(request(), [
            'siteUrl' => 'required',
            'siteTitle' => 'required|min:3',
            'skinCSS' => 'required',
            'menus' => 'required|min:3'
        ]);
      
        $site->siteUrl = request('siteUrl');
        $site->siteTitle = request('siteTitle');
        $site->skinCSS = request('skinCSS');
        $site->menus = request('menus');
        $site->gakey = request('gakey');
        $site->save();

        return redirect('/sites');
    }

}
