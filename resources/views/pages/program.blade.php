@extends('layouts.app')


@section('title','Kegiatan - Broadcast SMKN 1 Garut')


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

<h2 class="section-title">Kegiatan</h2>


<div class="card" style="padding:18px;">
<h3>Dokumentasi Harian</h3>
<p>Tim Broadcast melakukan dokumentasi harian untuk menangkap momen aktivitas siswa dan suasana sekolah. Hasil dokumentasi digunakan untuk arsip sekolah dan konten media sosial.</p>
</div>


<div class="card" style="margin-top:14px;padding:18px;">
<h3>Dokumentasi Event Sekolah</h3>
<p>Pada event besar seperti upacara, perpisahan, dan pentas seni, tim Broadcast bertugas melakukan liputan penuh, merekam video, dan membuat highlight acara.</p>
</div>


<h3 style="margin-top:18px">Daftar Kegiatan</h3>
<div class="grid" style="margin-top:12px">
<div class="card"><img src="https://images.unsplash.com/photo-1517260918039-6a6b7d06fbf0?auto=format&fit=crop&w=800&q=60"><h4 style="margin-top:10px">Liputan Upacara</h4></div>
<div class="card"><img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=800&q=60"><h4 style="margin-top:10px">Produksi Film Pendek</h4></div>
<div class="card"><img src="https://images.unsplash.com/photo-1510915228340-29c85a43dcfe?auto=format&fit=crop&w=800&q=60"><h4 style="margin-top:10px">Siaran Sekolah</h4></div>
</div>


@endsection