@extends('template.doctype')

@section('link')
    <link rel="stylesheet" href="css/Login.css">
@endsection

@section('content')

    <div class="page">
        <figure class="foto-perpustakaan">
            <img src="img/Perpustakaan.png" alt="perpustakaan">
        </figure>
        <main>
            <section class="welcoming">
                <h1>Hai, selamat datang kembali 👋</h1>
                <p>Silahkan masuk untuk lanjut membaca 😉</p>
            </section>
            <div class="login">
                <form action="" class="input-manual">
                    <div class="input-data">
                        <div class="email">
                            <h1>Email</h1>
                            <div class="box">
                                <label for="email">
                                    <img src="img/icon/mail.png" alt="">
                                </label>
                                <input type="email" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="password">
                            <h1>Password</h1>
                            <div class="box">
                                <label for="password">
                                    <img src="img/icon/mail.png" alt="">
                                </label>
                                <input type="password" name="password" id="password" placeholder="Password">
                                <div href="" id="mata" onclick="ubah()">
                                    <img src="img/icon/eye-off.png" alt="mata-tutup">
                                </div>
                            </div>
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
                        <button class="button-logsign">Log in</button>
                        <a href="">Buat akun</a>
                    </div>
                </form>
                <div class="atau">
                    <svg width="192" height="2" viewBox="0 0 192 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 1H192" stroke="#C1C1C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h3>atau masuk menggunakan</h3>
                    <svg width="192" height="2" viewBox="0 0 192 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 1H192" stroke="#C1C1C1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
            }
            else {

                //ubah form input password menjadi text
                document.getElementById('password').type = 'password';

                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mata').innerHTML = `<img src="img/icon/eye-off.png" alt="mata-tutup">`;
            }
        }
    </script>
@endsection
