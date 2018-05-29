<?php

namespace App\Http\Controllers\BusinessUserAuth;

use App\businessUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;

//Auth Facade used in guard
use Auth;

class RegisterController extends Controller
{

    protected $redirectPath = 'businessUser_home';

    //shows registration form to business user
    public function showRegistrationForm()
    {
        return view('businessUser.auth.register');
    }

    //Handles registration request for business user
    public function register(Request $request)
    {

        //Validates data
        $this->validator($request->all())->validate();

        //Create business user
        $businessUser = $this->create($request->all());

        //Authenticates business user
        $this->guard()->login($businessUser);

        //Redirects business user
        return redirect($this->redirectPath);
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id' => 'required|max:255|unique:business_users',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new seller instance after a validation.
    protected function create(array $data)
    {
        return BusinessUser::create([
            'id' => $data['id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    //Get the guard to authenticate Seller
    protected function guard()
    {
        return Auth::guard('web_businessUser');
    }


}
