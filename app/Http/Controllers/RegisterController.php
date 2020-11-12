<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showForm(){
        return view('authentication/register');
    }

    public function store(Request $request){
        //Am facut parola criptata
        $password = Hash::make($request->input('password'));
        //Inseram in DB contul nou
        DB::table('users')->insert([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $password
                ]);
    }
}
