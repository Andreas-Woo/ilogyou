<?php

namespace App\Http\Middleware;

use Closure;

//Auth Facade
use Auth;

class AuthenticateBusinessUser
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
        //If request does not comes from logged in business user
        //then he shall be redirected to Business user Login page
        if (! Auth::guard('web_businessUser')->check()) {
            return redirect('/businessUser_login');
        }

        return $next($request);
    }
}
