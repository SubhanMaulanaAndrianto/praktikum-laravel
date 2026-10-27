<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIM Surat')</title>
</head>
<body>
    <nav>
        <a href="/">Dashboard</a> | 
        <a href="/surat-masuk">Surat Masuk</a> | 
        <a href="/surat-keluar">Surat Keluar</a>
    </nav>
    <hr>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>