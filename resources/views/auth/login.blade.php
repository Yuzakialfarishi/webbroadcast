<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Broadcast Admin</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-background"></div>
    <div class="login-overlay"></div>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h1>LOGIN</h1>
                <div class="login-header-line"></div>
                <p>Broadcast SMKN 1 Garut</p>
            </div>

            @if ($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Username / Email</label>
                    <input 
                        id="email" 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}"
                        required 
                        autofocus
                        placeholder="masukkan email Anda"
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input 
                        id="password" 
                        type="password" 
                        name="password" 
                        required
                        placeholder="masukkan password Anda"
                    >
                </div>

                <div class="form-actions">
                    <a href="#">Lupa password?</a>
                </div>

                <button class="btn-login" type="submit">Log In</button>

                <div class="login-footer">
                    <p>Belum punya akun? <a href="#">Register di sini</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>