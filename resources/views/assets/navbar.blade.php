<nav>
    <div id="logo"></div>
    <!-- Search Bar -->
    <form action="" method="GET" class="search-bar">
        <img src="img/icon/Kaca Pembesar.png" alt="Kaca Pembesar" class="kaca-pembesar">
        <input type="search" placeholder='Ketik "Novel Penyihir"' class="search-field"/>
    </form>
    <ul>
        <li><a href="/" class="{{($title === "Beranda") ? 'active' : ''}}">Beranda</a></li>
        <li><a href="/disimpan" class="{{($title === "Disimpan") ? 'active' : ''}}">Disimpan</a></li>
        <li><a href="/profile" class="{{($title === "Profile") ? 'active' : ''}}">Profile</a></li>
    </ul>
</nav>
