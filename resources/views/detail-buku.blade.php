@extends('template.doctype')

@section('link')
    <link rel="stylesheet" href="css/Detail.css">
@endsection

@section('content')
    @include('assets.navbar')

    <div class="all-details">
        <div class="cover">
            <div class="besar">
                <img src="https://covers.openlibrary.org/b/isbn/{{$bookdata->ISBN}}-L.jpg" alt="Cover">
                <div class="pinjam-bookmark">
                    <button class="pinjam-buku">Pinjam buku ini</button>
                    <div class="bookmark">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_i_146_780)">
                            <rect width="56" height="56" rx="8" fill="#EAEAEA"/>
                            <path d="M33 19H23C21.9 19 21 19.9 21 21V37L28 34L35 37V21C35 19.9 34.1 19 33 19ZM33 34L28 31.82L23 34V22C23 21.45 23.45 21 24 21H32C32.55 21 33 21.45 33 22V34Z" fill="#094067"/>
                            </g>
                            <defs>
                            <filter id="filter0_i_146_780" x="0" y="0" width="56" height="56" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset/>
                            <feGaussianBlur stdDeviation="5"/>
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0.0352941 0 0 0 0 0.25098 0 0 0 0 0.403922 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="shape" result="effect1_innerShadow_146_780"/>
                            </filter>
                            </defs>
                            </svg>
                    </div>
                </div>
                
            </div>
            <div class="kecil">
                {{-- <img src="https://covers.openlibrary.org/b/isbn/{{$book->ISBN}}-L.jpg" alt="Cover"> --}}
            </div>
        </div>
            <section>
                <h2>{{ $bookdata->penulis }}</h2>
                <h1>{{ $bookdata->judul }}</h1>
                <div class="deskripsi-detail">
                    <div class="deskripsi">
                        <h3>Deskripsi</h3>
                        <p>{{ $bookdata->deskripsi }}</p>
                    </div>
                    <h3>Detail buku</h3>
                    <div class="detail">
                        <div class="detail-kiri">
                            <h4>Jumlah halaman</h4>
                            <p>{{ $bookdata->jmlHalaman }}</p>
                            <h4>Tanggal terbit</h4>
                            <p>{{ $bookdata->tanggalterbit }}</p>
                            <h4>ISBN</h4>
                            <p>{{ $bookdata->ISBN }}</p>
                            <h4>Bahasa</h4>
                            <p>{{ $bookdata->bahasa }}</p>
                        </div>
                        <div class="detail-kanan">
                            <h4>Penerbit</h4>
                            <p>{{ $bookdata->penerbit }}</p>
                            <h4>Lebar</h4>
                            <p>{{ $bookdata->lebar }} cm</p>
                            <h4>Panjang</h4>
                            <p>{{ $bookdata->panjang }} cm</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="review-rating">
            <h3>Reviews & Ratings</h3>
        </div>

@endsection
