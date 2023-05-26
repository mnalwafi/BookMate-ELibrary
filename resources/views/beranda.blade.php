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
         <section>
             <ul>
                 <li>
                     <h1>Rekomendasi untuk kamu</h1>
                 </li>
                 <li>
                    <a href="/">Lihat semua</a>
                </li>
            </ul>
            <div class="konten">
                <div class="kolom">
                    @foreach ($bookdata as $book)
                    <a href="/buku/{{$book->slug}}" class="cover">
                        <img src="/img/Cover Buku.png" alt="">
                        <h3>{{$book->Penulis}}</h3>
                        <h1>{{$book->Judul}}</h1>
                        <div class="rating">
                            rating
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
         </section>
         <section>
            <ul>
                <li>
                    <h1>Sedang Populer</h1>
                </li>
                <li>
                   <a href="/">Lihat semua</a>
               </li>
           </ul>
           <div class="konten">
               <div class="kolom">
                   @foreach ($bookdata as $book)
                   <a href="/buku/{{$book->slug}}" class="cover">
                       <img src="/img/Cover Buku.png" alt="">
                       <h3>{{$book->Penulis}}</h3>
                       <h1>{{$book->Judul}}</h1>
                       <div class="rating">
                           rating
                       </div>
                   </a>
                   @endforeach
               </div>
           </div>
        </section>
        <section>
            <ul>
                <li>
                    <h1>Buku Terbaru</h1>
                </li>
                <li>
                   <a href="/">Lihat semua</a>
               </li>
           </ul>
           <div class="konten">
               <div class="kolom">
                   @foreach ($bookdata as $book)
                   <a href="/buku/{{$book->slug}}" class="cover">
                       <img src="/img/Cover Buku.png" alt="">
                       <h3>{{$book->Penulis}}</h3>
                       <h1>{{$book->Judul}}</h1>
                       <div class="rating">
                           rating
                       </div>
                   </a>
                   @endforeach
               </div>
           </div>
        </section>
     </main>
 @endsection
