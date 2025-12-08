@extends('layouts.app')

@section('title', 'Kegiatan')

@section('css')
<link rel="stylesheet" href="{{ asset('css/kegiatan.css') }}">
@endsection

@section('content')
<!-- Banner: reused site banner -->
<div class="home-banner">
    <img class="home-banner-img" src="/img/banner-home.svg" alt="Banner Broadcast">
    <div class="home-banner-content">
        <h1>Broadcast SMKN 1 Garut</h1>
        <p>Ekstrakurikuler penyiaran, dokumentasi, dan multimedia — mengabadikan setiap momen sekolah.</p>
        <a href="/kegiatan" class="btn btn-primary">Lihat Kegiatan</a>
    </div>
</div>

<div class="kegiatan-hero">
    <div class="kegiatan-hero-overlay">
        <div class="kegiatan-hero-title">
            <h1>KEGIATAN KAMI</h1>
        </div>
    </div>
</div>

<div class="kegiatan-main">
    @php
        $hlLookup = [];
        if (isset($highlights)) {
            foreach ($highlights as $h) {
                $hlLookup[$h->title] = $h;
            }
        }
    @endphp
    <div class="kegiatan-section">
        <h2>Dokumentasi Harian</h2>
        <div class="kegiatan-row">
            <div class="kegiatan-text">
                <p>Dokumentasi harian adalah kegiatan sehari-hari tim Broadcast dalam merekam aktivitas pembelajaran dan kegiatan siswa di lingkungan SMKN 1 Garut. Setiap momen berharga diabadikan dengan fotografi dan videografi berkualitas tinggi untuk keperluan dokumentasi sekolah.</p>
                <p>Hasil dokumentasi digunakan untuk publikasi di berbagai media sekolah dan social media, sehingga seluruh warga sekolah dapat mengikuti perkembangan kegiatan secara real-time.</p>
            </div>
            <div class="kegiatan-img">
                <img src="{{ isset($hlLookup['Dokumentasi Harian']) && $hlLookup['Dokumentasi Harian']->photo ? asset('storage/' . $hlLookup['Dokumentasi Harian']->photo) : '/img/dokumentasi-harian.jpg' }}" alt="Dokumentasi Harian">
            </div>
        </div>
    </div>

    <div class="kegiatan-section">
        <h2>Event</h2>
        <div class="kegiatan-row reverse">
            <div class="kegiatan-img">
                <img src="{{ isset($hlLookup['Event']) && $hlLookup['Event']->photo ? asset('storage/' . $hlLookup['Event']->photo) : '/img/event.jpg' }}" alt="Event">
            </div>
            <div class="kegiatan-text">
                <p>Peliputan event adalah misi utama Broadcast SMKN 1 Garut. Setiap acara besar seperti lomba, seminar, pameran, dan perayaan di sekolah menjadi tanggung jawab tim Broadcast untuk didokumentasikan secara profesional.</p>
                <p>Tim kami menggunakan peralatan terbaik dan teknik produksi modern untuk menghasilkan konten video dan foto yang memorable dan berkualitas cinema. Event yang telah diliputi kemudian diedit dan dipublikasikan menjadi video highlight atau dokumentasi lengkap.</p>
            </div>
        </div>
    </div>

    <div class="kegiatan-section">
        <h2>Kumpulan Rutin</h2>
        <div class="kegiatan-row">
            <div class="kegiatan-text">
                <p>Kumpulan rutin adalah pertemuan berkala anggota Broadcast untuk berbagi ilmu, merencanakan kegiatan, dan mengasah keterampilan. Setiap pertemuan adalah kesempatan untuk belajar teknik baru, diskusi tentang proyek, dan membangun kebersamaan tim.</p>
                <p>Dalam kumpulan rutin, anggota saling memberikan feedback terhadap karya, berbagi pengalaman dari peliputan sebelumnya, dan merencanakan dokumentasi kegiatan-kegiatan mendatang. Ini adalah wadah pengembangan diri yang sangat berharga bagi setiap anggota Broadcast.</p>
            </div>
            <div class="kegiatan-img">
                <img src="{{ isset($hlLookup['Kumpulan Rutin']) && $hlLookup['Kumpulan Rutin']->photo ? asset('storage/' . $hlLookup['Kumpulan Rutin']->photo) : '/img/kumpulan-rutin.jpg' }}" alt="Kumpulan Rutin">
            </div>
        </div>
    </div>
</div>
@endsection
