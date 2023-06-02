<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login', [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request -> validate([
            'username' => 'required|min:3',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate() ;
            return redirect()->intended ('/beranda');
        }

        return back()->with('loginError', 'Login gagal, silahkan coba lagi!');
    }
}
