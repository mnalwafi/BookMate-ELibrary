<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SheetController extends Controller
{
    public function index(){
        return view('sheet', [
            "title" => "Disimpan",
            "bookdata" => Book::with(['rruser'])->select('books.*', 'rrusers.review', 'rrusers.rating', DB::raw('COUNT(rrusers.rating) as COUNT'), DB::raw('AVG(rrusers.rating) as AVG'))
            ->join('rrusers','books.id','=','rrusers.book_id')
            ->orderBy('books.id','desc')
            ->get()
        ]);
    }
}
