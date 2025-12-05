<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Broadcast SMKN 1 Garut</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
    <link rel="stylesheet" href="{{ asset('css/program.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pengurus.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
    @yield('styles')
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="{{ route('home') }}">Beranda</a>
                <a href="{{ route('about') }}">Tentang</a>
                <a href="{{ route('kegiatan') }}">Kegiatan</a>
                <a href="{{ route('team') }}">Struktur Organisasi</a>
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
