 @extends('template.doctype')

 @section('link')
     <link rel="stylesheet" href="css/Beranda.css">
 @endsection

 @section('content')
     @include('assets/navbar')
     <header id="hero">
         <div class="hero-main">
             <img src="img/Vector Baca Buku1.png" alt="Vector Baca Buku" class="hero-image">
             <h1>“Selama toko buku ada, selama itu pustaka bisa dibentuk kembali. Kalau perlu dan memang perlu, pakaian dan
                 makanan dikurangi.” <br>
                 - Tan Malaka</h1>
         </div>
     </header>
     <main>
         <section class="rekomendasi">
             <ul>
                 <li>
                     <h1>Rekomendasi untuk kamu</h1>
                 </li>
                 <li><a href="#Lihatsemua">Lihat semua</a></li>
             </ul>
         </section>
     </main>
 @endsection
