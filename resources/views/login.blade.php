@extends('template.doctype')

@section('link')
    <link rel="stylesheet" href="css/Login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
@endsection

@section('content')
    <div class="page">
        <figure class="foto-perpustakaan">
            <img src="img/Perpustakaan.png" alt="perpustakaan">
        </figure>
        <main>
            @if (session()->has('loginError'))
            <div class="alert alert-danger">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 26C21.5228 26 26 21.5228 26 16C26 10.4772 21.5228 6 16 6C10.4772 6 6 10.4772 6 16C6 21.5228 10.4772 26 16 26Z" fill="#F33C4B" stroke="#F33C4B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13 19L19 13M19 19L13 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <strong>{{ session('loginError') }}</strong>
            </div>
            @endif
            @if (session()->has('registerSuccess'))
            <div class="alert alert-success">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 26C21.5228 26 26 21.5228 26 16C26 10.4772 21.5228 6 16 6C10.4772 6 6 10.4772 6 16C6 21.5228 10.4772 26 16 26Z" fill="#12B76A" stroke="#12B76A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20.5 13L14.5 19L12 16.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <strong>{{ session('registerSuccess') }}</strong>
            </div>
            @endif
            <section class="welcoming">
                <h1>Hai, selamat datang kembali 👋</h1>
                <p>Silahkan masuk untuk lanjut membaca 😉</p>
            </section>
            <div class="login">
                <form action="/login" method="post">
                    @csrf
                    <div class="input-data">
                        <div class="email">
                            <h1>Username</h1>
                            <div class="box
                            @error('username')
                                is-invalid
                            @enderror">
                                <label for="username">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="#5F6C7B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M22 6L12 13L2 6" stroke="#5F6C7B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </label>
                                <input type="text" name="username" id="username" placeholder="Username" value="{{ old('username') }}">
                            </div>
                            @error('username')
                                <div class="invalid-message">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        <div class="password">
                            <h1>Password</h1>
                            <div class="box
                            @error('username')
                                is-invalid
                            @enderror">
                                <label for="password">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z" stroke="#5F6C7B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11" stroke="#5F6C7B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </label>
                                <input type="password" name="password" id="password" placeholder="Password">
                                <div href="" id="mata" onclick="ubah()">
                                    <img src="img/icon/eye-off.png" alt="mata-tutup">
                                </div>
                            </div>
                            @error('password')
                                <div class="invalid-message">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="bantuan">
                            <div class="ingat">
                                <input type="checkbox" name="ingat" id="ingat">
                                <label for="ingat">Ingat saya</label>
                            </div>
                            <a href="">Lupa password?</a>
                        </div>
                    </div>
                    <div class="submit">
                        <button class="button-logsign">Masuk</button>
                        <a href="/signup">Buat akun</a>
                    </div>
                </form>
                <div class="atau">
                    <svg width="192" height="2" viewBox="0 0 192 2" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 1H192" stroke="#C1C1C1" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <h3>atau masuk menggunakan</h3>
                    <svg width="192" height="2" viewBox="0 0 192 2" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 1H192" stroke="#C1C1C1" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="login-integrate">
                    <figure>
                        <img src="img/logo/facebook.svg" alt="">
                    </figure>
                    <figure>
                        <img src="img/logo/google.svg" alt="">
                    </figure>
                    <figure>
                        <img src="img/logo/linkedin.svg" alt="">
                    </figure>
                </div>
                <a href="{{route('home')}}" class="guestlog">
                    <h3>Lanjutkan tanpa membuat akun</h3>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_615_1159" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect x="24" y="24" width="24" height="24" transform="rotate(-180 24 24)" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_615_1159)">
                        <path d="M15 6L21 12L15 18L13.6 16.6L17.2 13L3 13V11L17.2 11L13.6 7.4L15 6Z" fill="#3DA9FC"/>
                        </g>
                    </svg>
                </a>
            </div>
        </main>
    </div>

    <script>
        // membuat fungsi change
        function ubah() {

            // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password
            var x = document.getElementById('password').type;

            //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
            if (x == 'password') {

                //ubah form input password menjadi text
                document.getElementById('password').type = 'text';

                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mata').innerHTML = `<img src="img/icon/eye-on.png" alt="mata-buka">`;
            } else {

                //ubah form input password menjadi text
                document.getElementById('password').type = 'password';

                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mata').innerHTML = `<img src="img/icon/eye-off.png" alt="mata-tutup">`;
            }
        }
    </script>
    <script type="text/javascript">

        $(document).ready(function () {

        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                $(this).remove();
            });
        }, 2000);

        });
        </script>
@endsection
