@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/program.css') }}">
@endsection

@section('content')
    <div class="card">
        <h1>Kegiatan</h1>

        <h3>Dokumentasi Harian</h3>
        <p>Tim Broadcast membuat dokumentasi harian kegiatan sekolah, seperti pelajaran praktik, kunjungan, dan aktivitas ekstrakurikuler lain.</p>

        <div style="margin-top:12px">
            <h3>Dokumentasi Event Sekolah</h3>
            <p>Kami menangani liputan event sekolah: pentas seni, upacara, lomba, dan acara khusus.</p>
        </div>
    </div>
@endsection
