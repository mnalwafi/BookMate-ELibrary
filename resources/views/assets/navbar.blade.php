<nav>
    <a href="/beranda"><div id="logo"></div></a>
    <!-- Search Bar -->
    <form action="" method="GET" class="search-bar">
        <img src="/img/icon/Kaca Pembesar.png" alt="Kaca Pembesar" class="kaca-pembesar">
        <input type="search" placeholder='Ketik "Novel Penyihir"' class="search-field"/>
    </form>
    <ul>
        <li><a href="{{route('home')}}" class="{{Request::is('home') ? 'active' : ''}}">Beranda</a></li>
        <li><a href="{{route('saved')}}" class="{{Request::is('disimpan') ? 'active' : ''}}">Disimpan</a></li>
        <li><a href="{{route('profile')}}" class="{{Request::is('profile') ? 'active' : ''}}">Profile</a></li>
    </ul>
</nav>
