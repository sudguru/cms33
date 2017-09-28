<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class SpyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:Super~Duper'); //restrict all except super suer
    }
    public function index(User $newuser)
    {
    	session(['spy' => '%4sVbf23@!#HH', 'currentLanguage' => 'en' ]);
    	Auth::logout();
    	Auth::login($newuser);
    	return redirect("/dashboard");
    }

    public function goback()
    {

    	$user_id = User::find(1);
    	Auth::login($user_id);
    	session(['spy' => '' ]);
    	return redirect("/sites");

    }
}	
