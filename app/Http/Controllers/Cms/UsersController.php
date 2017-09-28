<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Role;
use App\Site;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:Admin');
        $this->activeMenu = "Users";
    }

    public function index() {
    	$users = User::where( 'site_id' , auth()->user()->site_id )
                        ->where('role_id', '<' , 600)
                        ->get();
    	return view('cms.users.index')->with('activeMenu' , $this->activeMenu)->with('users' , $users);
    }

    public function create() {
        $roles = Role::where('name', '!=', 'Super')->get();
        return view('cms.users.create')->with('activeMenu' , $this->activeMenu)->with('roles' , $roles);
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed', 
            'site_id' => 'required',
            'role_id' => 'required'
        ]);

        //security: custom helpers /app/Http/helpers.php 
        //if authorized users siteid matches the submitte site id
        wt_siteLevelSecurity(request('site_id'));
        /*if(request('site_id') != auth()->user()->site_id)
        {
            auth()->logout();
            return redirect('/')->withErrors([
                'message' => 'Unauthorized Action. Your IP has been recorded in our database. Do you know Nepal Police ?'
            ]);
        }
        */

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'site_id' => request('site_id'),
            'role_id' => request('role_id')
        ]);

        
        return redirect('/users');
    }

    public function edit(User $user){
        wt_siteLevelSecurity($user->site_id);
        $roles = Role::where('name', '!=', 'Super')->get();
        return view('cms.users.edit')->with('activeMenu' , $this->activeMenu)->with('user' , $user)->with('roles', $roles);
    }

    
    public function update(User $user)
    {
         //security: custom helpers /app/Http/helpers.php 
        //if authorized users siteid matches the submitte site id
        wt_siteLevelSecurity(request('site_id'));

        if(strlen(request('password')) == "")
        {
        	$this->validate(request(), [
        	    'name' => 'required|string|max:255',
        	]);
        	$user->name = request('name');
            $user->role_id = request('role_id');
        	$user->save();
        }
        else
        {
        	$this->validate(request(), [
        	    'name' => 'required|string|max:255',
        	    'password' => 'required|string|min:6|confirmed'
        	]);

        	$user->name = request('name');
            $user->role_id = request('role_id');
        	$user->password = bcrypt(request('password'));
        	$user->save();
        }
    
        return redirect('/users');
    }

    public function destroy($user) {
        User::destroy($user);
        return back();
    }

    
}
