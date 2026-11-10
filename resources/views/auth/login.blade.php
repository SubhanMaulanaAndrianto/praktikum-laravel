
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SIM-SURAT</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="empire-login">

    <div class="empire-wrapper">

        <!-- PANEL KIRI -->
        <section class="empire-hero">

            <div class="empire-brand">
                <div class="brand-logo">S</div>
                <span>SIM-SURAT</span>
            </div>

            <div class="hero-content">
                <span class="hero-label"></span>

                <h1>
                   WELCOME TO
                    <span>SIM-SURAT</span>
                </h1>

                <p>
                    Kelola surat masuk dan surat keluar dengan
                    sistem digital yang lebih mudah.
                </p>

                <div class="hero-features">
                    <div>✦ Administrasi lebih efisien</div>
                    <div>✦ Akses sistem yang aman</div>
                </div>
            </div>

            <div class="hero-footer">
                © {{ date('Y') }} SIM-SURAT. All rights reserved.
            </div>

            <div class="hero-circle circle-one"></div>
            <div class="hero-circle circle-two"></div>

        </section>

        <!-- PANEL KANAN -->
        <section class="empire-form-section">

            <div class="empire-form-card">

                <div class="form-icon">✉</div>

                <span class="form-welcome">WELCOME BACK</span>

                <h2>Sign in to your account</h2>

                <p class="form-description">
                    Masukkan akun Anda untuk mengakses SIM-SURAT.
                </p>

                @if ($errors->any())
                    <div class="empire-error">
                        Email atau password tidak sesuai.
                    </div>
                @endif

                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    <div class="empire-field">
                        <label for="email">Email Address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@email.com"
                            autocomplete="username"
                            required
                        >

                        @error('email')
                            <p class="field-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="empire-field">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                            required
                        >

                        @error('password')
                            <p class="field-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="empire-button">
                        Sign In <span>→</span>
                    </button>
                </form>

                <div class="form-footer">
                    <span>Protected by SIM-SURAT Authentication</span>
                </div>

            </div>

        </section>

    </div>

</body>
</html>
