<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Broadcast SMKN 1 Garut</title>

    <!-- Global CSS (wajib) -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    <!-- CSS khusus halaman -->
    @yield('styles')

    <!-- Vite-built app assets (Tailwind / app JS) -->
    @if (file_exists(public_path('build'))) 
        {{-- production build --}}
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
        <script type="module" src="{{ asset('build/assets/app.js') }}"></script>
    @else
        {{-- dev / Vite server --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar">
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
        &copy; {{ date('Y') }} Broadcast SMKN 1 Garut — Semua hak dilindungi.
    </footer>
</body>
</html>
