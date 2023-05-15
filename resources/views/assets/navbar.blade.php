<nav>
    <div id="logo"></div>
    <!-- Search Bar -->
    <form action="" method="GET" class="search-bar">
        <img src="img/Kaca Pembesar.png" alt="Kaca Pembesar" class="kaca-pembesar">
        <input type="search" placeholder='Ketik "Novel Penyihir"' class="search-field"/>
    </form>
    <ul>
        <li><a href="/" class="{{($tittle === "Beranda") ? 'active' : ''}}">Beranda</a></li>
        <li><a href="/disimpan" class="{{($tittle === "Disimpan") ? 'active' : ''}}">Disimpan</a></li>
        <li><a href="/profile" class="{{($tittle === "Profile") ? 'active' : ''}}">Profile</a></li>
    </ul>
</nav>
