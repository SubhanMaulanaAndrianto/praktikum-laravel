
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

        @auth
            <span>
                | Masuk sebagai: {{ auth()->user()->name }}
            </span>

            <form action="{{ route('logout') }}" method="POST"
                  style="display:inline;">
                @csrf
                <button type="submit">Keluar</button>
            </form>
        @endauth
    </nav>

    <hr>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
