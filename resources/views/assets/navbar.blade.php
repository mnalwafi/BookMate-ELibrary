<nav>
    <a href="{{ route('home') }}">
        <div id="logo"></div>
    </a>
    <!-- Search Bar -->
    <form action="/book" method="GET" class="search-bar">
        <button id="searchbtn">
            <img src="/img/icon/Kaca Pembesar.png" alt="Kaca Pembesar" class="kaca-pembesar">
        </button>
        <input type="search" name="search" id="search" placeholder='Ketik "Novel Penyihir"' class="search-field" value="{{request('search')}}"/>
    </form>
    <ul>
        <li><a href="{{ route('home') }}" class="{{ Request::is('home', 'book*') ? 'active' : '' }}">Beranda</a></li>
        <li style="display: none"><a href="{{ route('saved') }}" class="{{ Request::is('disimpan') ? 'active' : '' }}" style="display: none">Disimpan</a></li>
        <li><a href="{{ route('profile') }}" class="{{ Request::is('profile*') ? 'active' : '' }}">Profile</a></li>
    </ul>
</nav>

<script>
    var input = document.getElementById("search");
    input.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            document.getElementById("searchbtn").click();
        }
    });
</script>\
