@extends('template.doctype')

@section('link')
    <link rel="stylesheet" href="/css/Formbuku.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
    <form action="{{ route('books.create.step.one.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div class="mainform">
                <div class="unggahbuku">
                    <h1>Unggah buku</h1>
                </div>
                <div class="judul">
                    <label for="judul">Judul buku</label>
                    <input type="text" name="Deskripsi" id="Deskripsi" placeholder="Deskripsi buku">
                    @error('judul')
                        <div class="invalid-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="navigasi">
            <a href="/profile/buku-diunggah" class="back">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_721_1102" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                        y="0" width="24" height="24">
                        <rect width="24" height="24" fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask0_721_1102)">
                        <path d="M9 18L3 12L9 6L10.4 7.4L6.8 11H21V13H6.8L10.4 16.6L9 18Z" fill="#3DA9FC" />
                    </g>
                </svg>
                <h3>Kembali</h3>
            </a>
            <div class="step">
                <hr class="active">
                <hr>
                <hr>
            </div>
            <button>
                <h3>Selanjutnya</h3>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_615_1159" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                        y="0" width="24" height="24">
                        <rect x="24" y="24" width="24" height="24" transform="rotate(-180 24 24)"
                            fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask0_615_1159)">
                        <path d="M15 6L21 12L15 18L13.6 16.6L17.2 13L3 13V11L17.2 11L13.6 7.4L15 6Z" fill="#3DA9FC" />
                    </g>
                </svg>
            </button>
        </div>

    </form>
@endsection
