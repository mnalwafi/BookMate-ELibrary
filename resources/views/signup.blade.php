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
                    <h1>Hai, selamat datang di <img src="img/logo-bookmate-crop.png"> 👋</h1></div>
                <p>Silahkan masuk untuk mulai membaca 😉</p>
            </section>
            <div class="signup">
                <form action="" >
                    <div class="input-data">
                        <div class="nama">
                            <div class="nama-depan">
                                <h1>Nama Depan</h1>
                                <div class="box">
                                    <input type="text" placeholder="Nama depan Anda">
                                </div>
                                <div class="nama-belakang">
                                    <h1>Nama Belakang</h1>
                                    <div class="box">
                                        <input type="text" placeholder="Nama belakang Anda">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="email">
                            <h1>Email</h1>
                            <div class="box">
                                <label for="email">
                                    <img src="img/icon/mail.png" alt="">
                                </label>
                                <input type="email" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="no-telp">
                            <h1>Nomor Telepon</h1>
                            <div class="box">
                                <label for="no-telp">
                                    <svg width="16" height="22" viewBox="0 0 16 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 1H3C1.89543 1 1 1.89543 1 3V19C1 20.1046 1.89543 21 3 21H13C14.1046 21 15 20.1046 15 19V3C15 1.89543 14.1046 1 13 1Z" stroke="#5F6C7B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                </label>
                                <input type="text" placeholder="081234567890">
                            </div>
                        </div>
                        <div class="password">
                            <h1>Password</h1>
                            <div class="box">
                                <label for="password">
                                    <img src="img/icon/lock.png" alt="">
                                </label>
                                <input type="password" name="password" id="password" placeholder="Password">
                                <div href="" id="mata" onclick="ubah()">
                                    <img src="img/icon/eye-off.png" alt="mata-tutup">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="syarat-ketentuan">
                    </h3>Dengan signup, Anda menyetujui <a href="">Syarat & Ketentuan</a> dan <a href="">Kebijakan Privasi</a>
                    <h3>
                    </div>

                    <div class="submit">
                        <button class="button-logsign">Sign up</button>
                        <h3>Sudah memiliki akun? <a href="/login">Log in</a></h3>
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
