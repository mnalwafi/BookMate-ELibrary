@extends('template.doctype')

@section('link')
    <link rel="stylesheet" href="/css/Profile.css">
@endsection

@section('content')
    @include('assets.navbar')

    <form action="/logout" method="post" class="logout">
        @csrf
        <button>logout</button>
    </form>

@endsection
