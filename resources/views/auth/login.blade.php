<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Panel Broadcast</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}?v={{ filemtime(public_path('css/login.css')) }}">
    <style>
        body::before {
            background-image: url("{{ asset('img/logo-broadcast.svg') }}?v={{ filemtime(public_path('img/logo-broadcast.svg')) }}") !important;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-container">
            <div class="login-card">
                <div class="login-header">
                    <h1>Admin Panel</h1>
                    <p>Broadcast SMKN 1 Garut Management System</p>
                </div>

                @if ($errors->any())
                <div class="error-alert">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-envelope"></i> Email
                        </label>
                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            required 
                            autofocus
                        >
                        @error('email')
                        <span class="field-error"><i class="fas fa-times-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">
                            <i class="fas fa-lock"></i> Password
                        </label>
                        <input 
                            id="password" 
                            type="password" 
                            name="password" 
                            required
                        >
                        @error('password')
                        <span class="field-error"><i class="fas fa-times-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-remember">
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">Ingat saya di perangkat ini</label>
                    </div>

                    <button class="btn-login" type="submit">
                        <i class="fas fa-sign-in-alt"></i> Masuk ke Admin Panel
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>