@extends('layouts.app')

@section('title', 'Pengurus')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pengurus.css') }}">
@endsection

@section('content')
<!-- Banner: reused site banner -->
<div class="home-banner">
    <img class="home-banner-img" src="/img/banner-home.svg" alt="Banner Broadcast">
    <div class="home-banner-content">
        <h1>Broadcast SMKN 1 Garut</h1>
        <p>Ekstrakurikuler penyiaran, dokumentasi, dan multimedia — mengabadikan setiap momen sekolah.</p>
        <a href="/pengurus" class="btn btn-primary">Lihat Pengurus</a>
    </div>
</div>

<div class="pengurus-container">
    <h1 class="pengurus-title">STRUKTUR PENGURUS BROADCAST SMKN 1 GARUT</h1>

    <div class="org-chart">
        <!-- Level 1: Pembina -->
        <div class="org-level level-1">
            <div class="org-box pembina">
                <div class="org-photo">
                    <img src="/img/pembina.jpg" alt="Pembina">
                </div>
                <h3>Ari</h3>
                <p>Pembina</p>
            </div>
        </div>

        <!-- Connector Line -->
        <div class="connector-line"></div>

        <!-- Level 2: Ketua -->
        <div class="org-level level-2">
            <div class="org-box ketua">
                <div class="org-photo">
                    <img src="/img/ketua.jpg" alt="Ketua">
                </div>
                <h3>Nama Ketua</h3>
                <p>Ketua</p>
            </div>
        </div>

        <!-- Connector Line -->
        <div class="connector-line"></div>

        <!-- Level 3: Ketua Divisi -->
        <div class="org-level level-3">
            <div class="org-box divisi">
                <div class="org-photo">
                    <img src="/img/wakil-ketua.jpg" alt="Wakil Ketua">
                </div>
                <h3>Nama Wakil</h3>
                <p>Wakil Ketua</p>
            </div>
            <div class="org-box divisi">
                <div class="org-photo">
                    <img src="/img/sekretaris.jpg" alt="Sekretaris">
                </div>
                <h3>Nama Sekretaris</h3>
                <p>Sekretaris</p>
            </div>
            <div class="org-box divisi">
                <div class="org-photo">
                    <img src="/img/bendahara.jpg" alt="Bendahara">
                </div>
                <h3>Nama Bendahara</h3>
                <p>Bendahara</p>
            </div>
        </div>

        <!-- Connector Line -->
        <div class="connector-line"></div>

        <!-- Level 4: Anggota Inti -->
        <div class="org-level level-4">
            <div class="org-box anggota">
                <div class="org-photo">
                    <img src="/img/anggota1.jpg" alt="Anggota">
                </div>
                <h3>Nama Anggota 1</h3>
                <p>Anggota Inti</p>
            </div>
            <div class="org-box anggota">
                <div class="org-photo">
                    <img src="/img/anggota2.jpg" alt="Anggota">
                </div>
                <h3>Nama Anggota 2</h3>
                <p>Anggota Inti</p>
            </div>
            <div class="org-box anggota">
                <div class="org-photo">
                    <img src="/img/anggota3.jpg" alt="Anggota">
                </div>
                <h3>Nama Anggota 3</h3>
                <p>Anggota Inti</p>
            </div>
            <div class="org-box anggota">
                <div class="org-photo">
                    <img src="/img/anggota4.jpg" alt="Anggota">
                </div>
                <h3>Nama Anggota 4</h3>
                <p>Anggota Inti</p>
            </div>
        </div>
    </div>
</div>
@endsection