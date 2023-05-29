<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        return view('beranda', [
            "title" => "Beranda",
            "bookdata" => Book::latest()->get()
        ]);
    }

    public function show(Book $book) {
        // return $bookdata = Book::all();
        return view('detail-buku', [
            "title" => "Detail",
            "bookdata" => $book
        ]);
    }

    public function create(){

    }
}
