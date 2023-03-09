<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function show(){
            
            return view('auth.register');
        }

    public function register(RegisterRequest $request)
    {
        // return view('auth.register');
       // dd($request->all());
       $user=User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
       ]);
       auth()->login($user);
       
       return redirect()->route('login.show');
    }
}
