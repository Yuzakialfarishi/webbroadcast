
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
        use Illuminate\Support\Str;
        
        $helper = function($foto) {
            if (empty($foto)) return null;
            $photos = [];
            $decoded = json_decode($foto, true);
            if(is_array($decoded) && count($decoded) > 0){
                $photos = $decoded;
            } else {
                if(strpos($foto, ',') !== false){
                    $photos = array_map('trim', explode(',', $foto));
                } elseif(strpos($foto, '|') !== false){
                    $photos = array_map('trim', explode('|', $foto));
                } else {
                    $photos = [trim($foto)];
                }
            }
            if(count($photos) > 0 && !empty($photos[0])) {
                return asset('storage/' . trim($photos[0]));
            }
            return null;
        };
        
        // Default images
        $fotoTentang = '/img/menu-tentang.jpg';
        $fotoKegiatan = '/img/WhatsApp%20Image%202025-12-17%20at%2007.58.40.jpeg';
        $fotoPengurus = '/img/menu-pengurus.jpg';
        
        // map titles to default images and texts
        $menuItems = [
            ['title' => 'Tentang', 'link' => '/tentang', 'default' => $fotoTentang, 'desc' => 'Pelajari lebih lanjut tentang visi, misi, dan profil Broadcast SMKN 1 Garut. Kami adalah ekstrakurikuler yang berdedikasi mengembangkan keterampilan penyiaran, dokumentasi, dan multimedia untuk mendukung kegiatan sekolah dan mengembangkan bakat siswa.'],
            ['title' => 'Kegiatan', 'link' => '/kegiatan', 'default' => $fotoKegiatan, 'desc' => 'Lihat dokumentasi lengkap dari berbagai kegiatan sekolah yang telah kami liputi. Dari dokumentasi harian, event besar, hingga kegiatan rutin anggota Broadcast. Semua dikerjakan dengan profesional dan kreatif.'],
            ['title' => 'Pengurus', 'link' => '/pengurus', 'default' => $fotoPengurus, 'desc' => 'Kenali struktur organisasi dan profil para pengurus Broadcast SMKN 1 Garut. Mereka adalah individu-individu kreatif dan berdedikasi yang memimpin dan menggerakkan setiap kegiatan unit ekstrakurikuler ini.'],
        ];
    @endphp

    @foreach($menuItems as $item)
        <div class="main-menu-card">
            <div class="main-menu-card-image">
                <img src="{{ $item['default'] }}" alt="{{ $item['title'] }}">
            </div>
            <div class="main-menu-card-content">
                <h2>{{ $item['title'] }}</h2>
                <p>{{ $item['desc'] }}</p>
                <a href="{{ $item['link'] }}" class="card-link-btn">Lihat Selengkapnya</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
