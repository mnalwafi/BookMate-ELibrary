@extends('template.doctype')

@section('content')

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

@foreach ($bookdata as $book)
    id {{$book}} punya rating sebanyak
    @foreach ($book->rruser as $rruser)
        {{ $rruser->rating}}
    @endforeach
    <br>
@endforeach

@endsection
