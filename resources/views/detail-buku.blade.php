@extends('template.doctype')

@section('link')
    <link rel="stylesheet" href="/css/Detail.css">
@endsection

@section('content')
    @include('assets.navbar')
    <div class="container">
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
            <div class="rating-komen">
                <div class="avg-rating">
                    <div class="bintang">
                        @if (fmod($bookdata->rruser[0]->avg('rating'),1) != 0.00)
                            @for ($i=0; $i < floor($bookdata->rruser[0]->avg('rating')); $i++)
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_110_354)">
                                <path d="M21.9995 36.8615L11.3355 43.588C10.8644 43.9019 10.3719 44.0364 9.85801 43.9916C9.34408 43.9467 8.89439 43.7674 8.50895 43.4535C8.1235 43.1396 7.82371 42.7476 7.60958 42.2777C7.39544 41.8059 7.35261 41.2786 7.4811 40.6956L10.3077 27.9824L0.864295 19.4397C0.436023 19.0361 0.168781 18.576 0.0625698 18.0594C-0.0453547 17.5446 -0.0136628 17.0406 0.157646 16.5473C0.328955 16.054 0.585918 15.6504 0.928535 15.3365C1.27115 15.0226 1.74225 14.8208 2.34183 14.7311L14.8045 13.5876L19.6226 1.61437C19.8367 1.07625 20.1691 0.672655 20.6196 0.403593C21.0685 0.134531 21.5284 0 21.9995 0C22.4706 0 22.9314 0.134531 23.382 0.403593C23.8308 0.672655 24.1623 1.07625 24.3764 1.61437L29.1945 13.5876L41.6572 14.7311C42.2568 14.8208 42.7279 15.0226 43.0705 15.3365C43.4131 15.6504 43.6701 16.054 43.8414 16.5473C44.0127 17.0406 44.0452 17.5446 43.939 18.0594C43.8311 18.576 43.563 19.0361 43.1347 19.4397L33.6913 27.9824L36.5179 40.6956C36.6464 41.2786 36.6036 41.8059 36.3895 42.2777C36.1753 42.7476 35.8755 43.1396 35.4901 43.4535C35.1046 43.7674 34.655 43.9467 34.141 43.9916C33.6271 44.0364 33.1346 43.9019 32.6635 43.588L21.9995 36.8615Z" fill="#F5C549"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_110_354">
                                <rect width="44" height="44" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            @endfor
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_110_359)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3355 43.588L21.9995 36.8615L29.1945 13.5876L24.3764 1.61437C24.1623 1.07625 23.8308 0.672655 23.382 0.403593C22.9314 0.134531 22.4706 0 21.9995 0C21.5284 0 21.0685 0.134531 20.6196 0.403593C20.1691 0.672655 19.8367 1.07625 19.6226 1.61437L14.8045 13.5876L2.34183 14.7311C1.74225 14.8208 1.27115 15.0226 0.928535 15.3365C0.585918 15.6504 0.328955 16.054 0.157646 16.5473C-0.0136628 17.0406 -0.0453547 17.5446 0.0625698 18.0594C0.168781 18.576 0.436023 19.0361 0.864295 19.4397L10.3077 27.9824L7.4811 40.6956C7.35261 41.2786 7.39544 41.8059 7.60958 42.2777C7.82371 42.7476 8.1235 43.1396 8.50895 43.4535C8.89439 43.7674 9.34408 43.9468 9.858 43.9916C10.3719 44.0364 10.8644 43.9019 11.3355 43.588ZM43.8414 16.5473C43.6285 15.9809 43.4744 15.7001 43.0705 15.3365C43.4131 15.6504 43.6701 16.054 43.8414 16.5473ZM43.1347 19.4397C43.5828 18.9561 43.7779 18.6619 43.939 18.0594C43.8311 18.576 43.563 19.0361 43.1347 19.4397ZM35.4901 43.4535C35.9368 43.0713 36.1249 42.8069 36.3895 42.2777C36.1753 42.7476 35.8755 43.1396 35.4901 43.4535ZM32.6635 43.588C33.2304 43.9435 33.472 43.9832 34.141 43.9916C33.6271 44.0364 33.1346 43.9019 32.6635 43.588Z" fill="#F5C549"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_110_359">
                                <rect width="44" height="44" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                        @else
                            @for ($i=0; $i < $bookdata->rruser[0]->avg('rating'); $i++)
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_110_354)">
                                <path d="M21.9995 36.8615L11.3355 43.588C10.8644 43.9019 10.3719 44.0364 9.85801 43.9916C9.34408 43.9467 8.89439 43.7674 8.50895 43.4535C8.1235 43.1396 7.82371 42.7476 7.60958 42.2777C7.39544 41.8059 7.35261 41.2786 7.4811 40.6956L10.3077 27.9824L0.864295 19.4397C0.436023 19.0361 0.168781 18.576 0.0625698 18.0594C-0.0453547 17.5446 -0.0136628 17.0406 0.157646 16.5473C0.328955 16.054 0.585918 15.6504 0.928535 15.3365C1.27115 15.0226 1.74225 14.8208 2.34183 14.7311L14.8045 13.5876L19.6226 1.61437C19.8367 1.07625 20.1691 0.672655 20.6196 0.403593C21.0685 0.134531 21.5284 0 21.9995 0C22.4706 0 22.9314 0.134531 23.382 0.403593C23.8308 0.672655 24.1623 1.07625 24.3764 1.61437L29.1945 13.5876L41.6572 14.7311C42.2568 14.8208 42.7279 15.0226 43.0705 15.3365C43.4131 15.6504 43.6701 16.054 43.8414 16.5473C44.0127 17.0406 44.0452 17.5446 43.939 18.0594C43.8311 18.576 43.563 19.0361 43.1347 19.4397L33.6913 27.9824L36.5179 40.6956C36.6464 41.2786 36.6036 41.8059 36.3895 42.2777C36.1753 42.7476 35.8755 43.1396 35.4901 43.4535C35.1046 43.7674 34.655 43.9467 34.141 43.9916C33.6271 44.0364 33.1346 43.9019 32.6635 43.588L21.9995 36.8615Z" fill="#F5C549"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_110_354">
                                <rect width="44" height="44" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            @endfor
                        @endif
                    </div>
                    <div class="rating">
                        {{ $bookdata->rruser[0]->avg('rating')}}
                    </div>
                </div>
                <div class="beri-komen">
                    <a href="">
                        <p>Beri komentar</p>
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.7771 0.808271C17.168 0.417217 17.802 0.417277 18.1928 0.808406C18.5834 1.19929 18.5833 1.83279 18.1926 2.22354L9.99967 10.4164C9.81287 10.6032 9.55969 10.7084 9.29552 10.709C8.74362 10.7101 8.29537 10.262 8.29459 9.71006C8.29421 9.44416 8.39965 9.18841 8.58764 9.00036L16.7771 0.808271Z" fill="#3DA9FC"/>
                        <path d="M11.3428 1.0001C12.2337 1.0001 12.6799 2.07724 12.0499 2.7072C11.8624 2.89474 11.608 3.0001 11.3428 3.0001H6.77C5.11814 3.0001 4.29221 3.0001 3.65906 3.31646C3.07792 3.60684 2.60675 4.07802 2.31637 4.65916C2 5.29231 2 6.11824 2 7.7701V12.2301C2 13.882 2 14.7079 2.31637 15.341C2.60675 15.9222 3.07792 16.3934 3.65906 16.6837C4.29221 17.0001 5.11814 17.0001 6.77 17.0001H11.23C12.8819 17.0001 13.7078 17.0001 14.3409 16.6837C14.9221 16.3934 15.3933 15.9222 15.6836 15.341C16 14.7079 16 13.882 16 12.2301V7.65731C16 7.39209 16.1054 7.13774 16.2929 6.9502C16.9229 6.32024 18 6.76641 18 7.65731V14.9708C18 15.9281 18 16.4068 17.8917 16.7988C17.6108 17.816 16.8159 18.6109 15.7987 18.8918C15.4067 19.0001 14.928 19.0001 13.9707 19.0001H4.77C3.11814 19.0001 2.29221 19.0001 1.65906 18.6837C1.07792 18.3933 0.606746 17.9222 0.316366 17.341C0 16.7079 0 15.882 0 14.2301V5.02943C0 4.07209 0 3.59342 0.10827 3.20141C0.389235 2.18415 1.18405 1.38933 2.20131 1.10837C2.59332 1.0001 3.07199 1.0001 4.02933 1.0001H11.3428Z" fill="#3DA9FC"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="komentar"></div>
                @foreach ($bookdata->rruser as $index => $rating)
                    @if ($index < 3)
                        <h4>{{ $rating->user->username }}</h4>
                        <p>{{ $rating->review }}</p>
                        <hr style="border-color: rgb(232, 232, 232); border-width: 1px;">
                    @endif
                @endforeach
                @if (count($bookdata->rruser) > 3)
                    <div class="semua-komen">
                        <a href=""><p>Lihat semua komentar</p><svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5752 0.741667C12.9019 1.06844 12.9019 1.59823 12.5752 1.925L7.91438 6.58579C7.13333 7.36684 5.867 7.36684 5.08595 6.58579L0.425162 1.925C0.0983939 1.59823 0.0983944 1.06844 0.425163 0.741667V0.741667C0.751931 0.414899 1.28173 0.414899 1.6085 0.741667L6.50016 5.63333L11.3918 0.741666C11.7186 0.414898 12.2484 0.414899 12.5752 0.741667V0.741667Z" fill="#3DA9FC"/>
                            </svg>
                        </a>
                    </div>
                @endif
        </div>
    </div>
@endsection