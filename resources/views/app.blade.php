<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>KGB Team | @yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                @guest
                <li><a href="{{ route('login') }}">login</a></li>
                @endguest
                @auth
                <li><a href="{{ route('logout' ) }}">logout</a></li>
                <li><a href="{{ route('profile') }}">profile</a></li>
                <img src="{{ asset($user->pic_path) }}" alt="{{ $user->username }} logo at kgb">
                <p>{{ $user->username }}</p>
                @endauth
            </ul>
        </nav>
    </header>
    @yield('content')

    <script src="js/app.js"></script>
</body>
</html>