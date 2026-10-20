<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <h2>Sistem Informasi Surat</h2>
        <nav>
            <nav>
    <a href="{{ route('dashboard') }}">Dashboard</a> |
    <a href="{{ route('surat-masuk.index') }}">Surat Masuk</a> |
    <a href="{{ route('surat-keluar.index') }}">Surat Keluar</a> |
</nav>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Sistem Informasi Surat</p>
    </footer>

</body>
</html>