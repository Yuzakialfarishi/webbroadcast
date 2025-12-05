<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Broadcast SMKN 1 Garut</title>
    <style>
        body{font-family:Arial,Helvetica,sans-serif;margin:0;padding:0;color:#222}
        header{background:#0b72b9;color:#fff;padding:12px 20px}
        nav a{color:#fff;margin-right:12px;text-decoration:none;font-weight:600}
        .container{max-width:1000px;margin:20px auto;padding:0 16px}
        .banner{width:100%;height:auto;border-radius:6px}
        .card{background:#f9f9f9;padding:16px;border-radius:6px;margin-top:12px}
        footer{padding:16px;text-align:center;color:#666;font-size:14px}
        .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:12px}
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="{{ route('home') }}">Beranda</a>
                <a href="{{ route('about') }}">Tentang</a>
                <a href="{{ route('program') }}">Program</a>
                <a href="{{ route('schedule') }}">Jadwal</a>
                <a href="{{ route('team') }}">Pembina & Pengurus</a>
                <a href="{{ route('contact') }}">Kontak</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Broadcast SMKN 1 Garut — Semua hak tersisa.
    </footer>
</body>
</html>
