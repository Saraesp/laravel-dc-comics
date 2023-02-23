<header>
    <div class="container p-3 d-flex align-items-center justify-content-between">
        <div id="logo">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
        </div>
        <div id="menu">
            <ul class="list-unstyled d-flex m-0" >
                <li><a href="">CHARACTERS</a></li>
                <li><a href="{{ route('homepage') }}">COMICS</a></li>
                <li><a href="">MOVIES</a></li>
                <li><a href="">TV</a></li>
                <li><a href="">GAMES</a></li>
                <li><a href="">COLLECTIBLES</a></li>
                <li><a href="">VIDEOS</a></li>
                <li><a href="">FANS</a></li>
                <li><a href="">NEWS</a></li>
                <li><a href="">SHOP</a></li>
            </ul>
        </div>
        <div id="search-bar" class="text-end ">
            <input type="text" placeholder="Search" class="border-bottom border-primary border-0 w-50 text-end">
        </div>
    </div>
    <div class="jumbotron"></div>
</header>