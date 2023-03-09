<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials=$request->except('_token');

        // dd($credentials);

        if(!Auth::validate($credentials)){
            return redirect()->to('login');
        }
        
        if(Auth::attempt($credentials)){
            return redirect()->intended('/');
        }
    }
}
