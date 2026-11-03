
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIM-Surat</title>
</head>
<body>

    <h1>Login SIM-Surat</h1>

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        <p>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </p>

        <p>
            <label>Password</label>
            <input type="password" name="password">
            @error('password')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </p>

        <button type="submit">Masuk</button>
    </form>

</body>
</html>
