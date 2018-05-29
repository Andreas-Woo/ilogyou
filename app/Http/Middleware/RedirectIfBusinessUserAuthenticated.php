<?php

namespace App\Http\Middleware;

use Closure;

//Auth Facade
use Auth;

class RedirectIfBusinessUserAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //If request comes from logged in normal user, he will
        //be redirect to home page.
        if (Auth::guard()->check()) {
            return redirect('/home');
        }

        //If request comes from logged in businessUser, he will
        //be redirected to business User's home page.
        if (Auth::guard('web_businessUser')->check()) {
            return redirect('/businessUser_home');
        }
        return $next($request);

    }
}
