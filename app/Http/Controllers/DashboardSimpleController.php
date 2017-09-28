<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
class DashboardSimpleController extends Controller
{
    private $activeMenu;
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:Author~Contributor'); //restrict all except super suer
        $this->activeMenu = "Dashboard";
    }

    public function index ()
    {
    	return view('cms.indexsimple')->with('activeMenu' , $this->activeMenu);
    }
}
