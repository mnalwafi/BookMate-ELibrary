<nav>
    <div id="logo"></div>
    <!-- Search Bar -->
    <form action="" method="GET" class="search-bar">
        <img src="/img/icon/Kaca Pembesar.png" alt="Kaca Pembesar" class="kaca-pembesar">
        <input type="search" placeholder='Ketik "Novel Penyihir"' class="search-field"/>
    </form>
    <ul>
        <li><a href="/beranda" class="{{Request::is('beranda') ? 'active' : ''}}">Beranda</a></li>
        <li><a href="/disimpan" class="{{Request::is('disimpan') ? 'active' : ''}}">Disimpan</a></li>
        <li><a href="/profile" class="{{Request::is('profile') ? 'active' : ''}}">Profile</a></li>
    </ul>
</nav>
