<?php

if (! function_exists('wt_siteLevelSecurity')) {
    /**
     * Add an element to an array using "dot" notation if it doesn't exist.
     *
     * @param  value
     * @return true / flase
     */
    function wt_siteLevelSecurity($site_id)
    {
        if($site_id != auth()->user()->site_id)
        {
            auth()->logout();
            return redirect('/')->withErrors([
                'message' => 'Unauthorized Action. Your IP has been recorded in our database. Do you know Nepal Police ?'
            ]);
        }
        else
        {
        	return true;
        }
    }
}

if (! function_exists('wt_login_redirect')) {
    /**
     * Add an element to an array using "dot" notation if it doesn't exist.
     *
     * @param  value
     * @return true / flase
     */
    function wt_login_redirect($userRole)
    {
        if (!request()->session()->has('spy')) {
            session(['spy' => false]);
        }
        if($userRole == 'Super') return redirect("/sites");
        if($userRole == 'Admin') return redirect("/dashboard");
        if($userRole == 'Editor') return redirect("/dashboard");
        if($userRole == 'Author') return redirect("/dashboard/author");
        if($userRole == 'Contributor') return redirect("/dashboard/contributor");
        if($userRole == 'Subscriber') return redirect("/dashboard/subscriber");
        if($userRole == 'Basic Member') return redirect("/dashboard/basic");
        if($userRole == 'Gold Member') return redirect("/dashboard/gold");
        if($userRole == 'Diamond Member') return redirect("/dashboard/diamond");
    }
}



