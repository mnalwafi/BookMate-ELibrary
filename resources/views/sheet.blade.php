@extends('template.doctype')

@section('content')


{{auth()->user()->username}}

@foreach ($userbook as $user)
    <h3>{{$user->book_id}}</h3>
    <p>{{$user->book_judul}}</p>
@endforeach

=================================================================================================================================

review and rating
<br><br>

@foreach ($userreview as $review)
    <h1>id review {{$review->id}}</h1>
    <h2>judul buku {{$review->book_judul}}</h2>
    <h3>rating {{$review->rating}}</h3>
    <p>{{$review->review}}</p>
@endforeach

{{-- {{$userdata->judul[0]}} --}}

{{-- @php
    foreach ($bookdata as $book) {
        echo $book->rruser->id;
        echo ' ';
    } --}}

    {{-- // for ($i=0; $i < count($bookdata); $i++) {
    //     $val=$jumlah[$i];
    //     $j=$i-1;
    //     while($j>=0 && $jumlah[$j] < $val){
	// 		$jumlah[$j+1] = $jumlah[$j];
	// 		$j--;
	// 	}
	// 	$jumlah[$j+1] = $val;
    // }

    // for ($i=0; $i < count($bookdata); $i++) {
    //     echo $jumlah[$i];
    // } --}}
{{-- @endphp --}}

{{-- @for ($i=0; $i < count($bookdata); $i++)

@endfor --}}

{{-- {{count($bookdata)}} --}}

{{-- @foreach ($bookdata as $book)

{{$book->user_id}}
<br>

    {{-- @if ($i!=0 || $i!=count($bookdata))
        @if ($bookdata[$i]->id  !== $bookdata[$i+1]->id)
            @for ($j=0; $j < count($bookdata[$i]->rruser); $j++)
            {{$bookdata[$i]->rruser[$j]->avg('rating')}}
            @endfor
            <br>
        @endif
    @else
        @for ($j=0; $j < count($bookdata[$i]->rruser); $j++)
        {{$bookdata[$i]->rruser[$j]->avg('rating')}}
        @endfor
        <br>
    @endif --}}

    {{-- {{$book->rruser[0]->avg('rating')}} --}}
    {{-- id {{$book}} punya rating sebanyak
    @foreach ($book as $rruser)
        {{ $rruser->avg('rating')}}
    @endforeach
    <br> --}}
{{-- @endforeach --}}

@endsection
