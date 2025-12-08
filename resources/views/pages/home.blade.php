
@extends('layouts.app')

@section('title', 'Beranda')

@section('css')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
<!-- Banner: full-width hero/banner at top -->
<div class="home-banner">
    <img class="home-banner-img" src="/img/banner-home.svg" alt="Banner Broadcast">
    <div class="home-banner-content">
        <h1>Broadcast SMKN 1 Garut</h1>
        <p>Ekstrakurikuler penyiaran, dokumentasi, dan multimedia — mengabadikan setiap momen sekolah.</p>
        <a href="/kegiatan" class="btn btn-primary">Lihat Kegiatan</a>
    </div>
</div>

<div class="simple-hero">
    <h1>Broadcast SMKN 1 Garut</h1>
    <p>Ekstrakurikuler penyiaran, dokumentasi, dan multimedia.</p>
</div>

<div class="main-menu-grid">
    @php
        // map titles to default images and texts
        $menuItems = [
            ['title' => 'Tentang', 'link' => '/tentang', 'default' => '/img/menu-tentang.jpg', 'desc' => 'Pelajari lebih lanjut tentang visi, misi, dan profil Broadcast SMKN 1 Garut. Kami adalah ekstrakurikuler yang berdedikasi mengembangkan keterampilan penyiaran, dokumentasi, dan multimedia untuk mendukung kegiatan sekolah dan mengembangkan bakat siswa.'],
            ['title' => 'Kegiatan', 'link' => '/kegiatan', 'default' => '/img/menu-kegiatan.jpg', 'desc' => 'Lihat dokumentasi lengkap dari berbagai kegiatan sekolah yang telah kami liputi. Dari dokumentasi harian, event besar, hingga kegiatan rutin anggota Broadcast. Semua dikerjakan dengan profesional dan kreatif.'],
            ['title' => 'Pengurus', 'link' => '/pengurus', 'default' => '/img/menu-pengurus.jpg', 'desc' => 'Kenali struktur organisasi dan profil para pengurus Broadcast SMKN 1 Garut. Mereka adalah individu-individu kreatif dan berdedikasi yang memimpin dan menggerakkan setiap kegiatan unit ekstrakurikuler ini.'],
        ];

        // prepare highlight lookup by title
        $hlLookup = [];
        if (isset($highlights)) {
            foreach ($highlights as $h) {
                $hlLookup[$h->title] = $h;
            }
        }
    @endphp

    @foreach($menuItems as $item)
        @php
            $img = $item['default'];
            // if highlight exists for this menu's logical mapping, use its photo
            if (isset($hlLookup['Dokumentasi Harian']) && $item['title'] === 'Kegiatan') {
                $img = asset('storage/' . $hlLookup['Dokumentasi Harian']->photo);
            }
            if (isset($hlLookup['Event']) && $item['title'] === 'Kegiatan') {
                // prefer event image for kegiatan if exists (fallbacks handled by order)
            }
            if ($item['title'] === 'Tentang' && isset($hlLookup['Kumpulan Rutin'])) {
                // no direct mapping for tentang, keep default
            }
        @endphp

        <a href="{{ $item['link'] }}" class="main-menu-card">
            <img src="{{ $img }}" alt="{{ $item['title'] }}">
            <h2>{{ $item['title'] }}</h2>
            <p>{{ $item['desc'] }}</p>
        </a>
    @endforeach
</div>
@endsection
