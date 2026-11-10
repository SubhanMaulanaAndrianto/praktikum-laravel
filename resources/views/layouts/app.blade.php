
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'SIM Surat') | Sistem Informasi Surat</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-100">

    <div class="min-h-screen">

        <!-- HEADER -->
        <header class="bg-blue-950 text-white shadow-lg">
            <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-6 py-5">

                <div>
                    <h2 class="text-2xl font-extrabold tracking-wide text-white">
                        SIM-SURAT
                    </h2>
                    <p class="text-sm text-blue-200">
                        Sistem Informasi Manajemen Surat
                    </p>
                </div>

                @auth
                    <div class="flex items-center gap-3">
                        <div class="text-right">
                            <p class="text-sm font-semibold">
                                {{ auth()->user()->name }}
                            </p>
                            <p class="text-xs text-blue-200">
                                Pengguna Sistem
                            </p>
                        </div>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="rounded-lg bg-red-500 px-4 py-2 text-sm font-semibold text-white hover:bg-red-600">
                                Keluar
                            </button>
                        </form>
                    </div>
                @endauth

            </div>
        </header>

        <!-- NAVIGATION -->
        <nav class="border-b border-slate-200 bg-white shadow-sm">
            <div class="mx-auto flex max-w-7xl flex-wrap items-center gap-2 px-6 py-3">

                <a href="/"
                    class="rounded-lg px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-700">
                    Dashboard
                </a>

                <a href="/surat-masuk"
                    class="rounded-lg px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-700">
                    Surat Masuk
                </a>

                <a href="/surat-keluar"
                    class="rounded-lg px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-blue-50 hover:text-blue-700">
                    Surat Keluar
                </a>

            </div>
        </nav>

        <!-- MAIN CONTENT -->
        <main class="mx-auto min-h-[70vh] max-w-7xl px-6 py-8">

            <div class="mb-6 rounded-xl border border-blue-100 bg-white p-6 shadow-sm">
                @yield('content')
            </div>

        </main>

        <!-- FOOTER -->
        <footer class="border-t border-slate-200 bg-white">
            <div class="mx-auto max-w-7xl px-6 py-5 text-center">
                <p class="text-sm text-slate-500">
                    &copy; {{ date('Y') }} SIM-SURAT.
                    Sistem Informasi Manajemen Surat.
                </p>
            </div>
        </footer>

    </div>

</body>
</html>
