<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUser;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showForm(){
        return view('authentication.login');
    }

    public function authenticate(LoginUser $request){
        $credentials = $request->only('email','password');
        $remember = $request->has("rememberMe");
        if(Auth::attempt($credentials,$remember)) {
            //Auth correct
            return redirect()->intended('/map');
        }
        return redirect("/login");
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('/');
    }
}
