<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\rruser;
use App\Models\Reviewrating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BookController extends Controller
{
    public function index()
    {
        return view('beranda', [
            "title" => "Beranda",
            "bookrecommend" => Book::with(['rruser'])->select('books.id', 'books.cover', 'books.slug', 'books.judul', 'books.penulis', 'books.isbn', DB::raw('AVG(rrusers.rating) as AVG'), DB::raw('COUNT(rrusers.rating) as COUNT'))
                                                ->join('rrusers','books.id','=','rrusers.book_id')
                                                ->having('AVG', '>', 3)
                                                ->groupBy('books.id')
                                                ->orderBy('AVG','desc')
                                                ->get(),
            "bookpopular" => Book::with(['rruser'])->select('books.id', 'books.cover', 'books.slug', 'books.judul', 'books.penulis', 'books.isbn', DB::raw('COUNT(rrusers.rating) as COUNT'), DB::raw('AVG(rrusers.rating) as AVG'))
                                                ->join('rrusers','books.id','=','rrusers.book_id')
                                                ->having('AVG', '>', 3)
                                                ->groupBy('books.id')
                                                ->orderBy('COUNT','desc')
                                                ->get(),
            "booklatest" => Book::with(['rruser'])->select('books.id', 'books.cover', 'books.slug', 'books.judul', 'books.penulis', 'books.isbn', 'books.tanggalTerbit', DB::raw('COUNT(rrusers.rating) as COUNT'), DB::raw('AVG(rrusers.rating) as AVG'))
                                                ->join('rrusers','books.id','=','rrusers.book_id')
                                                ->groupBy('books.id')
                                                ->orderBy('books.tanggalTerbit', 'desc')
                                                ->get(),
        ]);
    }

    public function show($slug)
    {
        $book = Book::where('slug', $slug)->first();
        $reviewrating = rruser::with(['user'])->select('rrusers.*', 'books.slug')->join('books', 'rrusers.book_id', '=','books.id')->where('books.slug', $slug)->latest()->get();

        Session::put('detail_url', request()->fullUrl());

        if ($book) {
            return view('detail-buku', [
                "title" => "Detail",
                "bookdata" => $book,
                "reviewrating" => $reviewrating
            ]);
        }
        abort(404);
    }

    public function showBooks(){
        $books = Book::select('books.id', 'books.cover', 'books.slug', 'books.judul', 'books.penulis', 'books.ISBN', DB::raw('AVG(rrusers.rating) as AVG'), DB::raw('COUNT(rrusers.rating) as COUNT'))
                    ->join('rrusers','books.id','=','rrusers.book_id')
                    ->groupBy('books.id')
                    ->orderBy('books.tanggalterbit', 'desc');

        if (request('search')){
            $books->where('judul', 'like', '%' . request('search') . '%')->orWhere('penulis', 'like', '%' . request('search'). '%');
        }

        return view('semua-buku', [
            'title' => 'Semua Buku',
            'books' => $books->get(),
        ]);
    }

    public function createStepOne(Request $request)
    {
        if(auth::user()->level == 'admin') {
            $book = $request->session()->get('book');

            return view('form.uploadbuku.step1',compact('book'), [
                "title" => 'Step 1'
            ]);
        }
        abort(404);
    }

    public function postCreateStepOne(Request $request)
    {
            $validatedData = $request->validate([
                'user_id' => 'required|numeric',
                'judul' => 'required|unique:books',
                'slug' => 'required|unique:books',
                'penulis' => 'required',
                'penerbit' => 'required',
                'cover' => 'required|image|file|max:5096',
                'isbn' => 'required|numeric|unique:books'
            ]);

            $validatedData['cover'] = $request->file('cover')->store('book-cover');

            // dd($validatedData);

            if(empty($request->session()->get('book'))){
                $book = new Book();
                $book->fill($validatedData);
                $request->session()->put('book', $book);
            }else{
                $book = $request->session()->get('book');
                $book->fill($validatedData);
                $request->session()->put('book', $book);
            }

            // dd($book);

            return redirect()->route('books.create.step.two');
    }

    public function createStepTwo(Request $request)
    {
        if(auth::user()->level == 'admin') {
            $book = $request->session()->get('book');

            return view('form.uploadbuku.step2',compact('book'), [
                "title" => 'Step 2'
            ]);
        }
        abort(404);
    }

    public function postCreateStepTwo(Request $request)
    {
        if(auth::user()->level == 'admin') {
            $validatedData = $request->validate([
                'deskripsi' => 'required|max:612'
            ]);

            $book = $request->session()->get('book');
            $book->fill($validatedData);
            $request->session()->put('book', $book);

            // dd($book);

            return redirect()->route('books.create.step.three');
        }
        abort(404);

    }

    public function createStepThree(Request $request)
    {
        if(auth::user()->level == 'admin') {
            $book = $request->session()->get('book');

            return view('form.uploadbuku.step3',compact('book'), [
                "title" => 'Step 3'
            ]);
        }
        abort(404);
    }

    public function postCreateStepThree(Request $request)
    {
        if(auth::user()->level == 'admin') {
            $validatedData = $request->validate([
                'jumlahHalaman' => 'required|max:612',
                'tanggalTerbit' => 'required',
                'bahasa' => 'required',
                'panjang' => 'required|numeric',
                'lebar' => 'required|numeric'
            ]);

            // dd($validatedData);

            $book = $request->session()->get('book');
            $book->fill($validatedData);
            // dd($book);
            $book->save();

            $request->session()->forget('book');

            return redirect('/profile/buku-diunggah')->with('registerSuccess', 'Buku berhasil diunggah');
        }
        abort(404);
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Book::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
