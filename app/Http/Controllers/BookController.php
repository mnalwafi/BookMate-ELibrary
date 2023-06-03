<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reviewrating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        return view('beranda', [
            "title" => "Beranda",
            "bookrecommend" => Book::with(['rruser'])->select('books.id', 'books.slug', 'books.judul', 'books.penulis', 'books.ISBN', DB::raw('AVG(rrusers.rating) as AVG'), DB::raw('COUNT(rrusers.rating) as COUNT'))
                                                ->join('rrusers','books.id','=','rrusers.book_id')
                                                ->having('AVG', '>', 3)
                                                ->groupBy('books.id')
                                                ->orderBy('AVG','desc')
                                                ->get(),
            "bookpopular" => Book::with(['rruser'])->select('books.id', 'books.slug', 'books.judul', 'books.penulis', 'books.ISBN', DB::raw('COUNT(rrusers.rating) as COUNT'), DB::raw('AVG(rrusers.rating) as AVG'))
                                                ->join('rrusers','books.id','=','rrusers.book_id')
                                                ->having('AVG', '>', 3)
                                                ->groupBy('books.id')
                                                ->orderBy('COUNT','desc')
                                                ->get(),
            "booklatest" => Book::with(['rruser'])->select('books.id', 'books.slug', 'books.judul', 'books.penulis', 'books.ISBN', 'books.tanggalterbit', DB::raw('COUNT(rrusers.rating) as COUNT'), DB::raw('AVG(rrusers.rating) as AVG'))
                                                ->join('rrusers','books.id','=','rrusers.book_id')
                                                ->where('rating', '>', 3)
                                                ->groupBy('books.id')
                                                ->orderBy('books.tanggalterbit', 'desc')
                                                ->get(),
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
