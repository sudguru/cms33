<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after regration.
     *
     * @var string
     */
    protected $redirectTo = '/sites';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('allowOnly:Super'); //restrict all except super suer
        $this->activeMenu = "Users";
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'site_id' => $data['site_id'],
            'role_id' => 400 //Admin
        ]);
    }

    public function index()
    {
        $users = User::where('role_id', '>=', 400)->get();
        return view('auth.index')->with('activeMenu' , $this->activeMenu)->with('users' , $users);
    }

    public function edit(User $user)
    {
        //$roles = Role::where('name', '!=', 'Super')->get();
        //$sites = Site::all();
        //Super Admin don't change site and role of users;
        return view('auth.edit')->with('activeMenu' , $this->activeMenu)->with('user' , $user); //->with('sites' , $sites);
    }

    public function update(User $user)
    {

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

        return redirect('/admins');
    }
    
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
