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
    @include('support.style')
    @stack('style')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

            <img src="{{asset('storage/MGlogo.png')}}" class="img-fluid" alt="logo">


            <div class="menu" >
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav container_select">
                    {{--                    <a class="nav-link" href="#">Computers</a>--}}
                    {{--                    <i class="far fa-angle-right"></i>--}}
                    <li>
                        <select class="select">
                            <option value="Computers">Computers</option>
                            <option value="Computers">Computers</option>
                            <option value="Computers" selected>Computers</option>
                            <option value="Computers">Computers</option>
                        </select>
                    </li>
                    <li><select class="select">
                            <option value="Printers">Printers</option>
                            <option value="Printers">Printers</option>
                            <option value="Printers" selected>Printers</option>
                            <option value="Printers">Printers</option>
                        </select>
                    </li>

                    <li><select class="select">
                            <option value="Accesories">Accesories</option>
                            <option value="Accesories">Accesories</option>
                            <option value="Accesories" selected>Accesories</option>
                            <option value="Accesories">Accesories</option>
                        </select>
                    </li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ">
                    <li class="search">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                   aria-describedby="search-addon"/>
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</div>
</body>
</html>
