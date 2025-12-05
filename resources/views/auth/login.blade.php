<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Broadcast Admin</title>
    <style>
        body{font-family:Arial,Helvetica,sans-serif;background:#f4f6f8}
        .wrap{max-width:420px;margin:80px auto;background:#fff;padding:20px;border-radius:6px;box-shadow:0 4px 14px rgba(0,0,0,.06)}
        input[type=text],input[type=password]{width:100%;padding:8px;margin:6px 0;border:1px solid #ddd;border-radius:4px}
        button{padding:8px 14px;background:#0b72b9;color:#fff;border:none;border-radius:4px}
    </style>
</head>
<body>
    <div class="wrap">
        <h2>Login Admin</h2>
        @if($errors->any())
            <div style="color:red">{{ $errors->first() }}</div>
        @endif
        <form method="post" action="{{ route('login.post') }}">
            @csrf
            <label>Email</label>
            <input type="text" name="email" value="{{ old('email') }}" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <div style="margin-top:8px">
                <label><input type="checkbox" name="remember"> Ingat saya</label>
            </div>
            <div style="margin-top:12px">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
