</DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Dashbord</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body>
    <header class="header">
        <div class="navbar">
            <a href="/" class="logo">
                🌸 My Space
             </a>
             <nav class="nav-links">
                <a href="/">Home</a>
                <a href="/tasks">Tasks</a>
                <a href="/about">About</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>

    <footer  class="footer">
        <p>Made with love and Laravel</p>
    </footer>
</body>
</html>








