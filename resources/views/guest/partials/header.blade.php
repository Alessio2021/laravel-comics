<header>
    <div class="header-top">
        <div class="container d-flex flex-end">
            <a href="#">dc power&trade; visa&reg;</a>
            <a href="#">additional dc sites<i class="fas fa-caret-down"></i></a>
        </div>
    </div>
    <div class="container container_header">
        <div class="header-sx">
            <img src="{{asset('images/dc-logo.png')}}" alt="logo-dc">
        </div>
        <div class="header-dx">
            <ul class="ul-header">
                <li class="li-header {{ 'characters' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('characters')}}">characters</a></li>
                <li class="li-header {{ 'comics' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('comics')}}" href="">comics</a></li>
                <li class="li-header {{ 'movies' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('movies')}}">movies</a></li>
                <li class="li-header {{ 'tv' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('tv')}}">tv</a></li>
                <li class="li-header {{ 'games' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('games')}}">games</a></li>
                <li class="li-header {{ 'collectibles' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('collectibles')}}">collectibles</a></li>
                <li class="li-header {{ 'videos' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('videos')}}">videos</a></li>
                <li class="li-header {{ 'fans' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('fans')}}">fans</a></li>
                <li class="li-header {{ 'news' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('news')}}">news</a></li>
                <li class="li-header {{ 'shop' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('shop')}}">shop<i class="fas blue_arrow-shop fa-caret-down"></i></a></li>
            </ul>
            <input type="text" placeholder="Search"><i class="fas fa-search"></i>
        </div>
    </div>
</header>