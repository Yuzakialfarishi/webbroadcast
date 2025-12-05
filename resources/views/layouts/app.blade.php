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
    @php
        $manifest = public_path('build/manifest.json');
    @endphp

    @if (file_exists($manifest))
        {{-- production build (use manifest) --}}
        @php
            $manifestData = json_decode(file_get_contents($manifest), true) ?: [];
            $appCss = $manifestData['resources/css/app.css']['file'] ?? ($manifestData['resources/js/app.js']['css'][0] ?? null);
            $appJs  = $manifestData['resources/js/app.js']['file'] ?? null;
        @endphp

        @if($appCss)
            <link rel="stylesheet" href="{{ asset('build/'.$appCss) }}">
        @endif

        @if($appJs)
            <script type="module" src="{{ asset('build/'.$appJs) }}"></script>
        @endif
    @else
        {{-- No manifest found: do not call @vite to avoid exceptions. --}}
        {{-- Dev server or build not available. Rely on `public/css/*` files already included. --}}
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
