<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showForm(){
        return view('authentication.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            //Auth correct
            return redirect()->intended('/map');
        } else {
            echo 'Something is wrong!';
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('/');
    }
}
