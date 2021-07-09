<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comics</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <!-- Header -->
    <header id="site_header">
        <div class="top">
            <div class="container">
                <span>DC POWER VISA</span>
                <span>
                    ADDITIONAL DC SITES
                    <i class="fas fa-caret-down"></i>
                </span>

            </div>
        </div>

        <div class="navbar">
            <div class="container">
                <div class="logo">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="">
                </div>
                <nav>
                    <a href="{{ route('characters') }}"
                        class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">Characters</a>
                    <a href="{{ route('comics') }}"
                        class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">Comics</a>
                    <a href="{{ route('movies') }}"
                        class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">Movies</a>
                    <a href="{{ route('tv') }}"
                        class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">TV</a>
                    <a href="{{ route('games') }}"
                        class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">Games</a>
                    <a href="{{ route('collectibles') }}"
                        class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">Collectibles</a>
                    <a href="{{ route('videos') }}"
                        class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">Videos</a>
                    <a href="{{ route('fans') }}"
                        class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">Fans</a>
                    <a href="{{ route('news') }}"
                        class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">News</a>
                    <a href="{{ route('shop') }}"
                        class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">Shop</a>
                </nav>
                <div class="search">
                    <input type="text" name="" id="" placeholder="Search       ">
                    <i class="fas fa-search"></i>
                </div>

            </div>

        </div>

        <div class="bottom">
            <!--Add Jumbo -->
        </div>
    </header>
    <!-- /Header -->


    <!-- Main -->
    <main id="site_main">
        @yield('content')
        <!-- Create connection -->
        <div class="features">
                <div class="container">
                    <a href="#">
                        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                        <div>Digital Comics</div>
                    </a>

                    <a href="#">
                        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                        <div>DC Merchandise</div>
                    </a>

                    <a href="#">
                        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                        <div>Subscription</div>
                    </a>

                    <a href="#">
                        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                        <div>Comic Shop Locator</div>        
                    </a>

                    <a href="#">
                        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                        <div>DC Power Visa</div>        
                    </a>
                </div>
            </div>
    </main>
    <!-- /Main -->


    <!-- Footer -->
    <footer id="site_footer">
            <div class="container">
                <div class="menus">
                    <ul class="footer_menu">
                        <li><h2 class="menu_heading">DC Comics</h2></li>
                        <li><a href="#">Characters</a></li>
                        <li><a href="/comics">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
    
                        <li>
                            <ul class="footer_menu">
                                <li><h2 class="menu_heading">Shop</h2></li>
                                <li><a href="#">Shop DC</a></li>
                                <li><a href="#">Shop DC Collectibles</a></li>
                            </ul>
                        </li>
                    </ul>
    
                    <ul class="footer_menu">
                        <li><h2 class="menu_heading">DC</h2></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy policy (New)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
    
                    <ul class="footer_menu">
                        <li><h2 class="menu_heading">Sites</h2></li>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>

                <div class="disclaimer">
                    <div>
                        All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.
                    </div>

                    <a href="#">Cookies Settings</a>
                </div>
            </div>
            <div class="call-to-action">
                <div class="container">
                    <button>SIGN-UP NOW!</button>

                    <div class="social">
                        <span>FOLLOW US</span>

                        <a href="#">
                            <img src="{{ asset('img/footer-facebook.png') }}" alt="">
                        </a>

                        <a href="#">
                            <img src="{{ asset('img/footer-twitter.png') }}" alt="">
                        </a>

                        <a href="#">
                            <img src="{{ asset('img/footer-youtube.png') }}" alt="">
                        </a>

                        <a href="#">
                            <img src="{{ asset('img/footer-pinterest.png') }}" alt="">
                        </a>

                        <a href="#">
                            <img src="{{ asset('img/footer-periscope.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </footer>
    <!-- /Footer -->
</body>

</html>