<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda', [
        "tittle" => "Beranda"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "tittle" => "Login"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "tittle" => "Profile"
    ]);
});

Route::get('/disimpan', function () {
    return view('disimpan', [
        "tittle" => "Disimpan"
    ]);
});


Route::get('/login', function () {
    return view('login', [
        "tittle" => "Login"
    ]);
});

Route::get('/signup', function () {
    return view('signup', [
        "tittle" => "Signup"
    ]);
});
