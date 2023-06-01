<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Reviewrating;

class BookController extends Controller
{
    public function index()
    {
        return view('beranda', [
            "title" => "Beranda",
            "bookrecommend" => Reviewrating::with(['book', 'user'])->where('jumlah', '>', '7')->orderBy('jumlah', 'DESC')->get(),
            "booklatest" => Book::with(['reviewrating', 'user'])->latest()->get(),
            "bookpopular" => Reviewrating::with(['book', 'user'])->where('rating', 4)->orWhere('rating', 5)->orderBy('rating', 'DESC')->get()
        ]);
    }

    public function show($slug)
    {
        $book = Book::where('slug', $slug)->first();
        if ($book) {
            return view('detail-buku', [
                "title" => "Detail",
                "bookdata" => $book
            ]);
        }
        abort(404);
    }

    public function create()
    {
    }
}
