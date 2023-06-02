<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;

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

Route::get('/home', [BookController::class, 'index'])->name('home');

Route::get('/profile', [UserController::class, 'index'])->middleware('auth')->name('profile');

Route::get('/disimpan', function () {
    return view('disimpan', [
        "title" => "Disimpan"
    ]);
})->name('saved');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [SignupController::class, 'create'])->name('signup')->middleware('guest');
Route::post('/signup', [SignupController::class, 'store']);

Route::get('/book/{slug}', [BookController::class, 'show'])->name('bookdetail');
