<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.user-login');
    }

    public function login()
    {
      $credentials = request()->only('email', 'password');
      if (auth()->attempt($credentials)) {
         
          $sessionValue = [
            "userData"=>[
              "id"=>auth()->user()->id,
              "fullName"=>auth()->user()->name,
              "email"=>auth()->user()->email,
            ]
          ];
          request()->session()->put("userData",$sessionValue);
          return redirect('/dashboard');
      }
      return redirect('/')->with(["error"=>"001","message"=>"Email atau Password salah"]);
    }

    public function logout()
    {
            // User::where(['userId'=>auth()->user()->userId])->update(['loginStatus'=>'N']);
            auth()->logout();

            request()->session()->invalidate();
        
            request()->session()->regenerateToken();
        
            return redirect('/');
    }
}
