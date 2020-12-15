<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showForm(){
        return view('authentication/register');
    }

    public function store(StoreUser $request){
        //Am facut parola criptata
        $password = Hash::make($request->input('password'));
        //Inseram in DB contul nou
        DB::table('users')->insert([
                'name' => $request->input('name'),
                'first_name' => $request->input('firstName'),
                'email' => $request->input('email'),
                'password' => $password,
                'address' => $request->input('address'),
                'birthday' => $request->input('birthday'),
                ]);
        return redirect("/login");
    }
}
