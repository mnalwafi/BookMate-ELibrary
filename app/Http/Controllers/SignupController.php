<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function create(){
        return view('signup', [
            "title" => "Sign up"
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:12|alpha_dash:ascii|unique:users',
            'email' => 'required|email:dns|unique:users',
            'phone-number'=>'required|phone',
            'password' => 'required|min:5'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect ('/login');
    }
}
