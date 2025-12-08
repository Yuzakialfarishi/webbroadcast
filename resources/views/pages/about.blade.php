
@extends('layouts.app')

@section('title', 'Tentang')

@section('css')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
<link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
@endsection

@section('content')
<!-- Banner: reused site banner -->
<div class="home-banner">
    <img class="home-banner-img" src="/img/banner-home.svg" alt="Banner Broadcast">
    <div class="home-banner-content">
        <h1>Broadcast SMKN 1 Garut</h1>
        <p>Ekstrakurikuler penyiaran, dokumentasi, dan multimedia — mengabadikan setiap momen sekolah.</p>
        <a href="/tentang" class="btn btn-primary">Tentang Kami</a>
    </div>
</div>

<div class="simple-hero">
    @if(!empty($profile->logo))
        <div class="about-hero-logo" style="margin-bottom:12px">
            <img src="{{ asset('storage/'.$profile->logo) }}" alt="Logo" style="max-height:140px; border-radius:8px">
        </div>
    @endif
    <h1>Tentang Kami</h1>
    <p>Pelajari lebih lanjut tentang visi, misi, dan profil Broadcast SMKN 1 Garut</p>
</div>

<div class="about-main">
    <!-- Profile Section -->
    <section class="about-section profile-section">
        <div class="section-header">
            <h2>Tentang Broadcast SMKN 1 Garut</h2>
            <div class="section-divider"></div>
        </div>
        <div class="section-row">
            <div class="section-text">
                <p class="intro-text">Broadcast SMKN 1 Garut adalah unit ekstrakurikuler yang berdedikasi dalam pengembangan keterampilan penyiaran, dokumentasi, videografi, dan multimedia di lingkungan SMKN 1 Garut.</p>
                <p>Kami berkomitmen untuk menciptakan konten kreatif berkualitas tinggi, mendukung setiap kegiatan sekolah dengan dokumentasi profesional, dan mengembangkan potensi bakat anggota dalam dunia media digital modern.</p>
                <p>Dengan tim yang solid, motivasi tinggi, dan peralatan modern, kami siap mengabadikan setiap momen penting dan menyajikan informasi secara profesional kepada seluruh warga SMKN 1 Garut.</p>
            </div>
            <div class="section-images">
                <img src="/img/broadcast1.jpg" alt="Kegiatan Broadcast" class="image-lg">
                <img src="/img/broadcast2.jpg" alt="Dokumentasi Broadcast" class="image-sm">
            </div>
        </div>
    </section>

    <!-- Visi Section -->
    <section class="about-section visi-section">
        <div class="section-header">
            <h2>Visi Kami</h2>
            <div class="section-divider"></div>
        </div>
        <div class="section-row reverse">
            <div class="section-images">
                <img src="/img/broadcast3.jpg" alt="Kegiatan Rutin" class="image-lg">
                <img src="/img/broadcast4.jpg" alt="Kegiatan Multimedia" class="image-sm">
            </div>
            <div class="section-text">
                <p class="visi-content">Menjadi unit ekstrakurikuler yang unggulan, kreatif, inovatif, dan profesional dalam bidang penyiaran, dokumentasi, videografi, dan multimedia di lingkungan SMKN 1 Garut, serta memberikan kontribusi nyata terhadap pengembangan sekolah yang berkualitas dan modern.</p>
            </div>
        </div>
    </section>

    <!-- Misi Section -->
    <section class="about-section misi-section">
        <div class="section-header">
            <h2>Misi Kami</h2>
            <div class="section-divider"></div>
        </div>
        <div class="misi-content">
            <div class="misi-list">
                <div class="misi-item">
                    <div class="misi-number">01</div>
                    <h3>Pengembangan Keterampilan</h3>
                    <p>Mengembangkan keterampilan anggota dalam bidang media digital, produksi video, fotografi, dan editing dengan teknologi terkini.</p>
                </div>
                <div class="misi-item">
                    <div class="misi-number">02</div>
                    <h3>Dukungan Sekolah</h3>
                    <p>Mendukung seluruh kegiatan dan acara sekolah melalui dokumentasi profesional, publikasi berkualitas, dan konten visual yang menarik.</p>
                </div>
            </div>
            <div class="misi-image">
                <img src="/img/broadcast5.jpg" alt="Kegiatan Dokumentasi">
            </div>
        </div>
    </section>
</div>
@endsection