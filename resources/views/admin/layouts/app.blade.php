<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Broadcast</title>
    <style>
        body{font-family:Arial,Helvetica,sans-serif;margin:0;padding:0;color:#222}
        header{background:#222;color:#fff;padding:12px}
        nav a{color:#fff;margin-right:12px;text-decoration:none}
        .container{max-width:1100px;margin:20px auto;padding:0 16px}
        .card{background:#f9f9f9;padding:16px;border-radius:6px;margin-top:12px}
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a href="{{ route('admin.profile.edit') }}">Profil Broadcast</a>
                <a href="{{ route('admin.kegiatans.index') }}">Kegiatan</a>
                <a href="{{ route('admin.pengurus.index') }}">Pengurus</a>
            </nav>
        </div>
    </header>
    <main class="container">
        @if(session('status'))
            <div class="card">{{ session('status') }}</div>
        @endif
        @yield('content')
    </main>
</body>
</html>
