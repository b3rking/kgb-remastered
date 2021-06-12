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
                <li><a href="#">Home</a></li>
                <li><a href="#">login</a></li>
                @auth
                <li><a href="#">account</a></li>
                @endauth
            </ul>
        </nav>
    </header>
    @yield('content')

    <script src="js/app.js"></script>
</body>
</html>