@extends('template.doctype')

@section('link')
    <link rel="stylesheet" href="css/Detail.css">
@endsection

@section('content')
    @include('assets/navbar')

    <p>{{ $bookdata->Judul }}</p>
@endsection
