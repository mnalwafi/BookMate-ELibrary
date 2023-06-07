@extends('template.doctype')

@section('link')
    <link rel="stylesheet" href="/css/Profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
@endsection

@section('content')
    @include('assets.navbar')
    <div class="container">
        <div class="tab-option">
            <ul>
                <li class="option-list" style="display: none">
                    <a href="/profile/-" class="" style="display: none">Buku Dipinjam</a>
                </li>
                <li class="option-list">
                    <a href="/profile/" class="pactive">Reviews & Ratings</a>
                </li>
                @if (auth()->user()->level == 'admin')
                    <li class="option-list">
                        <a href="/profile/buku-diunggah" class="">Buku Diunggah</a>
                    </li>
                @endif
            </ul>
            <hr style="border: 1px solid #eaeaea; margin-top: 10px; margin-bottom: 10px;">
        </div>

        <div class="data-pengguna">
            <img src="/img/profile-pict.png" alt="Profile Picture">
            <h3>Data Pengguna</h3>
            {{-- ambil data --}}
            <h3>{{ auth()->user()->username }}</h3>
            <p>{{ auth()->user()->name }}</p>
            <p>{{ auth()->user()->email }}</p>

            <div class="ubah-data">
                <h3 id="btn-ubah">Ubah data</h3>
                <svg id="btn-ubah" width="23" height="23" viewBox="0 0 23 23" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.0732 1.27615C20.5293 0.819924 21.2689 0.819994 21.7249 1.27631C22.1807 1.73235 22.1805 2.47143 21.7247 2.9273L12.1663 12.4857C11.9484 12.7036 11.653 12.8263 11.3448 12.827C10.7009 12.8283 10.1779 12.3055 10.177 11.6616C10.1766 11.3514 10.2996 11.053 10.5189 10.8336L20.0732 1.27615Z"
                        fill="#3DA9FC" />
                    <path
                        d="M13.7333 1.49995C14.7726 1.49995 15.2932 2.75662 14.5582 3.49158C14.3394 3.71037 14.0427 3.83328 13.7333 3.83328H7.60333C5.95147 3.83328 5.12555 3.83328 4.4924 4.14965C3.91126 4.44003 3.44008 4.91121 3.1497 5.49235C2.83333 6.1255 2.83333 6.95143 2.83333 8.60328V15.3966C2.83333 17.0485 2.83333 17.8744 3.1497 18.5076C3.44008 19.0887 3.91126 19.5599 4.4924 19.8503C5.12555 20.1666 5.95147 20.1666 7.60333 20.1666H14.3967C16.0485 20.1666 16.8745 20.1666 17.5076 19.8503C18.0887 19.5599 18.5599 19.0887 18.8503 18.5076C19.1667 17.8744 19.1667 17.0485 19.1667 15.3966V9.2667C19.1667 8.95728 19.2896 8.66053 19.5084 8.44174C20.2433 7.70678 21.5 8.22731 21.5 9.2667V17.7991C21.5 19.3858 21.5 20.1791 21.2075 20.7921C20.9116 21.412 20.412 21.9116 19.7922 22.2074C19.1792 22.5 18.3858 22.5 16.7991 22.5H5.27C3.61814 22.5 2.79221 22.5 2.15906 22.1836C1.57792 21.8932 1.10675 21.422 0.816366 20.8409C0.5 20.2077 0.5 19.3818 0.5 17.73V6.20084C0.5 4.61412 0.5 3.82075 0.792544 3.20779C1.08838 2.58792 1.58797 2.08834 2.20784 1.7925C2.8208 1.49995 3.61416 1.49995 5.20089 1.49995H13.7333Z"
                        fill="#3DA9FC" />
                </svg>
            </div>
            <form action="{{ route('logout') }}" method="post" class="logout">
                @csrf
                <button class="keluar">
                    <h3 id="btn-keluar">Keluar</h3>
                    <svg id="btn-keluar" width="28" height="28" viewBox="0 0 28 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.00008 2.33301H17.5001C18.1189 2.33301 18.7124 2.57884 19.15 3.01643C19.5876 3.45401 19.8334 4.0475 19.8334 4.66634V5.99967C19.8334 6.55196 19.3857 6.99967 18.8334 6.99967H18.5001C17.9478 6.99967 17.5001 6.55196 17.5001 5.99967V5.66634C17.5001 5.11406 17.0524 4.66634 16.5001 4.66634H8.00008C7.4478 4.66634 7.00008 5.11406 7.00008 5.66634V22.333C7.00008 22.8853 7.4478 23.333 8.00008 23.333H16.5001C17.0524 23.333 17.5001 22.8853 17.5001 22.333V21.9997C17.5001 21.4474 17.9478 20.9997 18.5001 20.9997H18.8334C19.3857 20.9997 19.8334 21.4474 19.8334 21.9997V23.333C19.8334 23.9518 19.5876 24.5453 19.15 24.9829C18.7124 25.4205 18.1189 25.6663 17.5001 25.6663H7.00008C6.38124 25.6663 5.78775 25.4205 5.35017 24.9829C4.91258 24.5453 4.66675 23.9518 4.66675 23.333V4.66634C4.66675 4.0475 4.91258 3.45401 5.35017 3.01643C5.78775 2.57884 6.38124 2.33301 7.00008 2.33301Z"
                            fill="#EB0029" />
                        <path
                            d="M19.476 17.4816C19.0868 17.8723 19.0874 18.5044 19.4774 18.8944L19.7096 19.1266C20.1001 19.5171 20.7332 19.5171 21.1238 19.1266L25.5429 14.7074C25.9334 14.3169 25.9334 13.6837 25.5429 13.2932L21.1238 8.8741C20.7332 8.48357 20.1001 8.48357 19.7096 8.8741L19.4774 9.10625C19.0874 9.49624 19.0868 10.1284 19.476 10.5191L21.7817 12.8337H11.5C10.9477 12.8337 10.5 13.2814 10.5 13.8337V14.167C10.5 14.7193 10.9477 15.167 11.5 15.167H21.7817L19.476 17.4816Z"
                            fill="#EB0029" />
                    </svg>
                </button>
            </form>
        </div>

        <div class="main-content">
            <div id="review-rating">
                @foreach ($userreview as $review)
                    <div class="review">
                        <div class="atas">
                            <h3>{{ $review->book_judul }} - {{ $review->book_penulis }}</h3>
                            <form action="/profile/reviewrating/" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $review->id }}">
                                <button onclick="return confirm('Beneran mau hapus ulasan?')">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="32" height="32" rx="5" fill="#FED5CB" />
                                        <path d="M8 16H24" stroke="#EB0029" stroke-width="4" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <div class="bintang">
                            @for ($i = 0; $i < $review->rating; $i++)
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_128_689)">
                                        <path
                                            d="M11.9997 20.1062L6.18302 23.7753C5.92606 23.9465 5.65742 24.0199 5.37709 23.9954C5.09677 23.971 4.85149 23.8731 4.64124 23.7019C4.431 23.5307 4.26748 23.3169 4.15068 23.0605C4.03388 22.8032 4.01052 22.5156 4.0806 22.1976L5.62238 15.2631L0.471434 10.6035C0.237831 10.3833 0.0920625 10.1324 0.034129 9.85059C-0.0247389 9.56979 -0.00745242 9.29486 0.0859887 9.0258C0.17943 8.75674 0.319592 8.53659 0.506474 8.36537C0.693356 8.19415 0.950319 8.08408 1.27736 8.03516L8.07521 7.41143L10.7032 0.880566C10.82 0.587044 11.0013 0.366902 11.2471 0.220142C11.4919 0.0733806 11.7428 0 11.9997 0C12.2567 0 12.5081 0.0733806 12.7538 0.220142C12.9986 0.366902 13.1794 0.587044 13.2962 0.880566L15.9243 7.41143L22.7221 8.03516C23.0491 8.08408 23.3061 8.19415 23.493 8.36537C23.6799 8.53659 23.82 8.75674 23.9135 9.0258C24.0069 9.29486 24.0247 9.56979 23.9667 9.85059C23.9079 10.1324 23.7616 10.3833 23.528 10.6035L18.3771 15.2631L19.9189 22.1976C19.989 22.5156 19.9656 22.8032 19.8488 23.0605C19.732 23.3169 19.5685 23.5307 19.3582 23.7019C19.148 23.8731 18.9027 23.971 18.6224 23.9954C18.3421 24.0199 18.0734 23.9465 17.8164 23.7753L11.9997 20.1062Z"
                                            fill="#F5C549" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_128_689">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            @endfor
                        </div>
                        <p>"{{ $review->review }}"</p>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @if (session()->has('registerSuccess'))
        <div class="alert alert-success">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16 26C21.5228 26 26 21.5228 26 16C26 10.4772 21.5228 6 16 6C10.4772 6 6 10.4772 6 16C6 21.5228 10.4772 26 16 26Z"
                    fill="#12B76A" stroke="#12B76A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M20.5 13L14.5 19L12 16.5" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <strong>{{ session('registerSuccess') }}</strong>
        </div>
    @endif
    <script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                    $(this).remove();
                });
            }, 2000);
        });
    </script>
@endsection
