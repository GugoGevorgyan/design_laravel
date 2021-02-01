<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,500,800" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
          crossorigin="anonymous"/>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/tailwind.css') }}" rel="stylesheet">
    @include('support.style')
    @include('support.mediaStyle')
    @stack('style')
    @stack('mediaStyle')

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

            <img src="{{asset('storage/MGlogo.png')}}" class="img-fluid" alt="logo">


            <div class="menu" >
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav container_select">
                    <li>
                        <select class="select font18_size22">
                            <option value="Computers">Computers</option>
                            <option value="Computers">Computers</option>
                            <option value="Computers" selected>Computers</option>
                            <option value="Computers">Computers</option>
                        </select>
                    </li>
                    <li><select class="select font18_size22">
                            <option value="Printers">Printers</option>
                            <option value="Printers">Printers</option>
                            <option value="Printers" selected>Printers</option>
                            <option value="Printers">Printers</option>
                        </select>
                    </li>
{{--//////////////////////////////////////////////////////////////////////--}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle select font18_size22" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Accesories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Headphones</a>
                            <a class="dropdown-item" href="#">Airpods</a>
                            <a class="dropdown-item" href="#">Earbuds</a>
                            <a class="dropdown-item" href="#">Speakers</a>
                        </div>
                    </li>
{{--                    ///////////////////////////////////////////////////////////--}}
{{--                    <li><select class="select font18_size22">--}}
{{--                            <option value="Accesories" selected>Accesories</option>--}}
{{--                            <option value="Headphones">Headphones</option>--}}
{{--                            <option value="Airpods">Airpods</option>--}}
{{--                            <option value="Earbuds" >Earbuds</option>--}}
{{--                            <option value="Speakers">Speakers</option>--}}
{{--                        </select>--}}
{{--                    </li>--}}

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav search_container">
                    <li class="search">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                   aria-describedby="search-addon"/>
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div  class="menu_ellipse"></div>
                    </li>
                    <li class="">
                        <div>
                            <div>
                                <img src="" alt="Favorites">
                                <p>Favorites</p>
                            </div>
                            <div>
                                <img src="" alt="Cart">
                                <p>Cart</p>
                            </div>
                            <div>
                                <p> Currency</p>
                                <input type="radio" id="amd" name="Currency" value="AMD">
                                <label for="amd">AMD</label>
                                <input type="radio" id="usd" name="Currency" value="USD">
                                <label for="usd">USD</label>
                            </div>
                            <div>
                                <p> Language</p>
                                <input type="radio" id="usa" name="Currency" value="usa">
                                <label for="usa"><img src="" alt="usa"></label>
                                <input type="radio" id="arm" name="Currency" value="arm">
                                <label for="arm"><img src="" alt="arm"></label>
                            </div>
                        </div>
                    </li>
                </ul>

                <!-- @media -->

                <ul class="navbar-nav media_menu_icons d_none">
                    <li class="media_heart">
                        <a href="">
                            <img class="img_heart" src="{{asset('storage/add-to-favorites.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                        <img class="img_heart" src="{{asset('storage/Cart-with-plus.png')}}" alt="">
                      </a>
                    </li>
                    <li>
                        <a href="">
                        <img class="img_heart" src="{{asset('storage/menu-alt-2.png')}}" alt="">
                        </a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>

    <main>
        @yield('content')
        @yield('footer')
    </main>
<div class="flex_row center footer__list">
    <div class="flex_row col-lg-8 justify-content-around footer__list__container">
    <div class="center justify-content-between align-items-baseline ">
        <h5 class="footer_contact mb-2">Contact</h5>
        <ul class="list-unstyled">
            <li>
                <img src="{{asset('storage/VectorGps.png')}}" alt="">
                Rich Plaza, Yerevan, Armenia</li>
            <li> <img src="{{asset('storage/mail.png')}}" alt="">
                mg@gmail.com</li>
            <li> <img src="{{asset('storage/phone.png')}}" alt="">
                +374 95 84 84 54</li>
        </ul>
            <div class="flex_column">
                <p class="follow_us footer_contact">Follow us on</p>
                <div class="flex_row">
                    <div class="social_container center"><img src="{{asset('storage/fb.png')}}" alt=""></div>
                    <div class="social_container center"><img src="{{asset('storage/insta.png')}}" alt=""></div>
                </div>

            </div>

    </div>
    <div >
        <h5 class="footer_contact mb-2">Products</h5>
        <ul  class="list-unstyled prod">
            <li><a href="">Laptops</a></li>
            <li><a href="">Headphones</a></li>
            <li><a href="">Speakers</a></li>
            <li><a href="">Airpods</a></li>
            <li><a href="">Keyboards</a></li>
        </ul>
    </div>
        <div class="about_us__container">
            <h4 class="about_us font18_size22 font-weight-bold">About us</h4>
            <p class="about_text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                Velit officia consequat duis enim velit mollit.
                Exercitation veniam.</p>
        </div>
    </div>
</div>
</div>
</body>
</html>
