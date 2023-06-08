<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\rruser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReviewratingController extends Controller
{
    public function create($slug){
        $book = Book::where('slug', $slug)->first();

        return view('form.reviewrating', [
            "title" => 'Buat ulasan',
            "book" => $book
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'book_id' => 'required|numeric',
            'user_id' => 'required|numeric',
            'rating' => 'required|min:1|max:5',
            'review' => 'max:255'
        ]);

        rruser::create($validatedData);

        return redirect(session('detail_url'))->with('registerSuccess', 'Selamat, ulasan kamu berhasil diunggah 🎉');
    }

    public function destroy(Request $request){
        rruser::where('id', $request->id)->delete();

        return redirect('/profile')->with('registerSuccess', 'Ulasan kamu berhasil dihapus 🎉');
    }
}
