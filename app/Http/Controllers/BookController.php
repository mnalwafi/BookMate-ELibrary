<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        return view('beranda', [
            "title" => "Beranda",
            "bookdata" => Book::all()
        ]);
    }

    public function show(Book $book) {
        // return $bookdata = Book::all();
        return view('detail-buku', [
            "title" => "Beranda",
            "bookdata" => $book
        ]);
    }

    public function create(){

    }
}
