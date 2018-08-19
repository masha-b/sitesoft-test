<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet" media="screen">

</head>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="/">{{ config('app.name', 'Laravel') }}</a>
        <ul class="nav">
            <li{{ Request::is('/') ? ' class=active' : '' }}><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            @guest
            <li{{ Request::is('login') ? ' class=active' : '' }}>
                <a href="{{ route('login') }}">Авторизация</a>
            </li>
            <li{{ Request::is('register') ? ' class=active' : '' }}>
                <a href="{{ route('register') }}">Регистрация</a>
            </li>
            @endguest
        </ul>
        @auth
        <ul class="nav pull-right">
            <li>
                <a>{{ Auth::user()->username }}</a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Выход</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
        @endauth
    </div>
</div>
@yield('content')


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
