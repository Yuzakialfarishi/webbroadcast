@extends('layouts.app')

@section('title', 'Jadwal')

@section('css')
<link rel="stylesheet" href="{{ asset('css/schedule.css') }}">
@endsection

@section('content')
<!-- Banner: reused site banner -->
<div class="home-banner">
    <img class="home-banner-img" src="/img/banner-home.svg" alt="Banner Broadcast">
    <div class="home-banner-content">
        <h1>Broadcast SMKN 1 Garut</h1>
        <p>Ekstrakurikuler penyiaran, dokumentasi, dan multimedia — mengabadikan setiap momen sekolah.</p>
        <a href="/schedule" class="btn btn-primary">Lihat Jadwal</a>
    </div>
</div>

<div class="container">
    <h1>Jadwal Kegiatan</h1>
    <p>Belum ada jadwal yang diunggah.</p>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="card">
        <h1>Jadwal Kumpulan</h1>

        <table style="width:100%;border-collapse:collapse">
            <tr style="background:#eee"><th style="text-align:left;padding:8px">Hari</th><th style="text-align:left;padding:8px">Jam</th><th style="text-align:left;padding:8px">Lokasi</th></tr>
            <tr><td style="padding:8px">Senin</td><td style="padding:8px">15:30 - 17:00</td><td style="padding:8px">Lab Multimedia</td></tr>
            <tr><td style="padding:8px">Rabu</td><td style="padding:8px">15:30 - 17:00</td><td style="padding:8px">Lab Multimedia</td></tr>
        </table>

        <p style="margin-top:8px">Jadwal dapat berubah sesuai kebutuhan latihan atau event sekolah. Pastikan mengikuti pengumuman resmi ekstrakurikuler.</p>
    </div>
@endsection
