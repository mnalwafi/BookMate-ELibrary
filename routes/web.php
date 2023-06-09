<?php

use App\Models\Book;
use App\Models\rruser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SheetController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ReviewratingController;
use Illuminate\Contracts\Database\Eloquent\Builder;

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
Route::get('/', function () {
    return redirect('/home');
});

// Route::get('/profile', [UserController::class, 'index'])->middleware('auth')->name('profile');

Route::get('/profile', [UserController::class, 'review'])->middleware('auth')->name('profile');
Route::post('/profile', [ReviewratingController::class, 'destroy'])->middleware('auth');

Route::get('/profile/buku-diunggah', [UserController::class, 'unggah'])->middleware('auth');
// Route::get('/profile/buku-diunggah/create', [BookController::class, 'create'])->middleware('auth');


Route::get('/disimpan', function () {
    return view('disimpan', [
        "title" => "Disimpan"
    ]);
})->name('saved');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/signup', [SignupController::class, 'create'])->name('signup')->middleware('guest');
Route::post('/signup', [SignupController::class, 'store']);

Route::get('/book/{slug}', [BookController::class, 'show'])->name('bookdetail');

Route::get('/book/{slug}/reviewrating/create', [ReviewratingController::class, 'create'])->middleware('auth');
Route::post('/book/{slug}', [ReviewratingController::class, 'store']);

Route::get('/sheet', [SheetController::class, 'index'])->middleware('auth');

Route::get('/book', [BookController::class, 'showBooks']);

Route::get('/profile/buku-diunggah/create/step-one', [BookController::class, 'createStepOne'])->name('books.create.step.one');
Route::post('/profile/buku-diunggah/create/step-one', [BookController::class, 'postCreateStepOne'])->name('books.create.step.one.post');

Route::get('/profile/buku-diunggah/create/step-two', [BookController::class, 'createStepTwo'])->name('books.create.step.two');
Route::post('/profile/buku-diunggah/create/step-two', [BookController::class, 'postCreateStepTwo'])->name('books.create.step.two.post');

Route::get('/profile/buku-diunggah/create/step-three', [BookController::class, 'createStepThree'])->name('books.create.step.three');
Route::post('/profile/buku-diunggah/create/step-three', [BookController::class, 'postCreateStepThree'])->name('books.create.step.three.post');

Route::get('/profile/buku-diunggah/create/step-one/checkSlug', [BookController::class, 'checkSlug'])->middleware('auth');
