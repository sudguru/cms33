<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\Role;
use App\User;
class ProfileController extends Controller
{
    private $activeMenu;
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:all'); //restrict all except super suer
        $this->activeMenu = "Users";
    }

    public function edit(User $user) {
    	if(auth()->user()->id != $user->id)
        {
            auth()->logout();
            return redirect('/')->withErrors([
                "message" => "You can not change somebody else's profile. Your username/IP address has been logged to our system. Do you know Nepal Police?"
            ]);
        }
        return view('profile.edit')->with('activeMenu' , $this->activeMenu)->with('user' , $user);
    }

    public function update(User $user)
    {
        //check if the user is updating his own profile
        if(auth()->user()->id != $user->id)
        {
            auth()->logout();
            return redirect('/')->withErrors([
                "message" => "You can not change somebody else's profile. Your username/IP address has been logged to our system. Do you know Nepal Police?"
            ]);
        }
        if(strlen(request('password')) == "")
        {
            $this->validate(request(), [
                'name' => 'required|string|max:255',
            ]);
            $user->name = request('name');
            $user->save();
        }
        else
        {
            $this->validate(request(), [
                'name' => 'required|string|max:255',
                'password' => 'required|string|min:6|confirmed'
            ]);

            $user->name = request('name');
            $user->password = bcrypt(request('password'));
            $user->save();
        }

        return wt_login_redirect(auth()->user()->role->name);
    }

    public function setlanguage($language) {
        session(['currentLanguage' => $language ]);
        return redirect('/login');
    }
}
