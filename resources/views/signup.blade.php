@extends('template.doctype')

@section('link')
    <link rel="stylesheet" href="css/Signup.css">
@endsection

@section('content')
    <div class="page">
        <figure class="foto-perpustakaan">
            <img src="img/Perpustakaan.png" alt="perpustakaan">
        </figure>
        <main>
            <section class="welcoming">
                <div>
                    <img src="img/Greetings.svg" alt="">
                </div>
                <p>Silahkan masuk untuk mulai membaca 😉</p>
            </section>
            <div class="signup">
                <form action="/signup" method="post">
                    @csrf
                    <div class="input-data">
                        <div class="nama">
                            <div class="nama-depan">
                                <h1>Nama Lengkap</h1>
                                <div
                                    class="box
                                @error('name')
                                    is-invalid
                                @enderror">
                                    <input type="text" name="name" placeholder="Nama lengkap Anda"
                                        value="{{ old('name') }}">
                                </div>
                                @error('name')
                                    <div class="invalid-message">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="nama-belakang">
                                <h1>Username
                                </h1>
                                <div
                                    class="box
                                @error('username')
                                is-invalid
                                @enderror">
                                    <input type="text" name="username" placeholder="Username Anda"
                                        value="{{ old('username') }}">
                                </div>
                                @error('username')
                                    <div class="invalid-message">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="email">
                            <h1>Email</h1>
                            <div
                                class="box
                            @error('email')
                            is-invalid
                            @enderror">
                                <label for="email">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                            stroke="#5F6C7B" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M22 6L12 13L2 6" stroke="#5F6C7B" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </label>
                                <input type="email" name="email" id="email" placeholder="Email"
                                    value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <div class="invalid-message">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="no-telp">
                            <h1>Nomor Telepon</h1>
                            <div
                                class="box
                            @error('phone-number')
                            is-invalid">
                            @enderror
                             <label for="no-telp">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 2H7C5.89543 2 5 2.89543 5 4V20C5 21.1046 5.89543 22 7 22H17C18.1046 22 19 21.1046 19 20V4C19 2.89543 18.1046 2 17 2Z"
                                        stroke="#5F6C7B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 18H12.01" stroke="#5F6C7B" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                </label>
                                <input type="text" name="phone-number" placeholder="(+62) 888 - 8888 - 8888"
                                    value="{{ old('phone-number') }}">
                            </div>
                            @error('phone-number')
                                <div class="invalid-message">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="password">
                            <h1>Password</h1>
                            <div
                                class="box
                            @error('password')
                            is-invalid
                            @enderror">
                                <label for="password">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z"
                                            stroke="#5F6C7B" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11"
                                            stroke="#5F6C7B" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </label>
                                <input type="password" name="password" id="password" placeholder="Password">
                                <div href="" id="mata" onclick="ubah()">
                                    <img src="img/icon/eye-off.png" alt="mata-tutup">
                                </div>
                            </div>
                            @error('password')
                                <div class="invalid-message">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="syarat-ketentuan">
                        </h3>
                        Dengan membuat akun, Anda menyetujui
                        <a href="">Syarat & Ketentuan</a>
                        dan
                        <a href="">Kebijakan Privasi.</a>
                        <h3>
                    </div>
                    <div class="submit">
                        <button class="button-logsign">Buat akun</button>
                        <a href="/login">Log in</a>
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
@endsection
