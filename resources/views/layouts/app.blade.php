<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('assets/css/bootstrap-3.3.7.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome-4.7.0.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dataTables.bootstrap-1.10.16.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li {{ ( Request::is('room-category') || Request::is('room-category/*') ? 'class=active' : '' ) }}>
                                <a href="{{ url('room-category') }}">Room Category</a>
                            </li>
                            <li {{ ( Request::is('room') || Request::is('room/*') ? 'class=active' : '' ) }}>
                                <a href="{{ url('room') }}">Room</a>
                            </li>
                            <li {{ ( Request::is('customer') || Request::is('customer/*') ? 'class=active' : '' ) }}>
                                <a href="{{ url('customer') }}">Customer</a>
                            </li>
                            <li {{ ( Request::is('room-reservation') || Request::is('room-reservation/*') ? 'class=active' : '' ) }}>
                                <a href="{{ url('room-reservation') }}">Room Reservation</a>
                            </li>
                            <li {{ ( Request::is('payable-by-customer') || Request::is('payable-by-customer/*') ? 'class=active' : '' ) }}>
                                <a href="{{ url('payable-by-customer') }}">Payable By Customer</a>
                            </li>
                            <li {{ ( Request::is('user') || Request::is('user/*') ? 'class=active' : '' ) }}>
                                <a href="{{ url('user') }}">User</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container"> 
            @include('flash::message')
        </div>
        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/js/app.js') }}"></script> -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-3.3.7.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables-1.10.16.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap-1.10.16.min.js') }}"></script>
    <script src="{{ asset('assets/js/text-only-number.js') }}"></script>
    @yield('script')
</body>
</html>
