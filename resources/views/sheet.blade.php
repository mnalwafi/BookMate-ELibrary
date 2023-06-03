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

{{-- {{count($bookdata)}} --}}

@foreach ($bookdata as $book)

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
@endforeach

@endsection
