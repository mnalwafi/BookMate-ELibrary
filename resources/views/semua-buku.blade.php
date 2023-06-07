@extends('template.doctype')

@section('link')
<link rel="stylesheet" href="css/semua-buku.css">
@endsection

@section('content')
    @include('assets.navbar')
    <div class="main">
        <div class="grid-container">
            @foreach($books as $book)
            <div class="card-buku">
                <a href="/book/{{ $book->slug }}">
                    <img src="https://covers.openlibrary.org/b/isbn/{{ $book->ISBN }}-L.jpg" alt="">
                    <h3>{{ $book->penulis }}</h3>
                    <h1>{{ $book->judul }}</h1>
                    <div class="rating">
                        <div class="scores">
                            
                        </div>
                    </div>
                </a>
                </div>
                @endforeach
        </div>
    </div>
    
@endsection