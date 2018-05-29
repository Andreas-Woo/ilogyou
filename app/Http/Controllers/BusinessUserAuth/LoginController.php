<?php

namespace App\Http\Controllers\BusinessUserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//Auth facade
use Auth;

class LoginController extends Controller
{

    //Where to redirect business user after login.
    protected $redirectTo = '/businessUser_home';

    //Trait
    use AuthenticatesUsers;

    //Custom guard for seller
    protected function guard()
    {
        return Auth::guard('web_businessUser');
    }

    //Shows business User login form
    public function showLoginForm()
    {
        return view('businessUser.auth.login');
    }

    protected function username()
    {
        return 'id';
    }

}
