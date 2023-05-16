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
                            <span href="" id="mata" onclick="ubah()">
                                <img src="img/icon/eye-off.png" alt="mata-tutup">
                            </span>
                        </div>
                    </div>
                </form>
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
