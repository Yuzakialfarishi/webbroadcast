@extends('layouts.app')

@section('title', 'Kegiatan')

@section('css')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
<link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
<style>
    .kegiatan-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 40px;
    }

    .kegiatan-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        transition: all 0.3s ease;
        animation: fadeInUp 0.6s ease forwards;
        opacity: 0;
        display: flex;
        flex-direction: column;
    }

    .kegiatan-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(0,0,0,0.25);
    }

    .card-image {
        width: 100%;
        height: 280px;
        overflow: hidden;
        background: #f0f0f0;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-content {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .card-badge {
        display: inline-block;
        background: linear-gradient(135deg, #2c5aa0, #3b7ca5);
        color: #fff;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 600;
        margin-bottom: 12px;
        width: fit-content;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #1a3d52;
        margin-bottom: 12px;
        line-height: 1.4;
    }

    .card-description {
        font-size: 0.95rem;
        color: #666;
        line-height: 1.5;
        margin-bottom: 12px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card-date {
        font-size: 0.85rem;
        color: #888;
        margin-top: auto;
        display: flex;
        align-items: center;
    }

    .card-date::before {
        content: "📅";
        margin-right: 6px;
    }

    @media (max-width: 1024px) {
        .kegiatan-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }
    }

    @media (max-width: 768px) {
        .kegiatan-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
        /* Logo overlay -- only for kegiatan page */
        .home-banner::after {
            content: '';
            position: absolute;
            top: 12%;
            right: 40px;
            width: 220px;
            height: 220px;
            background-image: url("{{ asset('img/' . rawurlencode('Logo BC.png')) }}");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.08;
            pointer-events: none;
            z-index: 1;
        }
</style>
@endsection

@section('content')
<!-- Banner: reused site banner -->
<div class="home-banner">
    <img class="home-banner-img" src="/img/banner-home.svg" alt="Banner Broadcast">
    <div class="home-banner-content">
        <h1>Broadcast SMKN 1 Garut</h1>
        <p>Ekstrakurikuler penyiaran, dokumentasi, dan multimedia — mengabadikan setiap momen sekolah.</p>
        <a href="/kegiatan" class="btn btn-primary">Kegiatan Kami</a>
    </div>
</div>

<div class="simple-hero">
    <h1>Kegiatan Kami</h1>
    <p>Dokumentasi dan catatan kegiatan Broadcast SMKN 1 Garut</p>
</div>

<div class="about-main">
    @php
        use Illuminate\Support\Str;

        $harian = $kegiatans->filter(function($k){
            return Str::contains(Str::lower($k->jenis ?? ''), 'harian') || Str::contains(Str::lower($k->jenis ?? ''), 'dokumentasi');
        });

        $event = $kegiatans->filter(function($k){
            return Str::contains(Str::lower($k->jenis ?? ''), 'event') || Str::contains(Str::lower($k->jenis ?? ''), 'sekolah');
        });

        $rutin = $kegiatans->filter(function($k){
            return Str::contains(Str::lower($k->jenis ?? ''), 'rutin') || Str::contains(Str::lower($k->jenis ?? ''), 'kumpulan');
        });

        function getFirstPhoto($foto) {
            $photos = [];
            if(!empty($foto)){
                $decoded = null;
                try { $decoded = json_decode($foto, true); } catch (\Throwable $e) { $decoded = null; }
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
            }
            return !empty($photos) ? $photos[0] : null;
        }
    @endphp

    <!-- Dokumentasi Harian Section -->
    <section class="about-section">
        <div class="section-header">
            <h2>Dokumentasi Harian</h2>
            <div class="section-divider"></div>
        </div>

        @if($harian->count() > 0)
        <div class="kegiatan-grid">
            @php $idx = 0; @endphp
            @foreach($harian as $item)
            @php
                $firstPhoto = getFirstPhoto($item->foto);
                $idx++;
            @endphp
            @if($firstPhoto)
            <div class="kegiatan-card" style="animation-delay: {{ ($idx - 1) * 0.1 }}s">
                <div class="card-image">
                    <img src="{{ asset('storage/' . $firstPhoto) }}" alt="{{ $item->judul ?? 'Dokumentasi harian' }}">
                </div>
                <div class="card-content">
                    <span class="card-badge">{{ $item->jenis ?? 'Dokumentasi' }}</span>
                    <h3 class="card-title">{{ $item->judul ?? 'Kegiatan' }}</h3>
                    @if(!empty($item->deskripsi))
                    <p class="card-description">{{ $item->deskripsi }}</p>
                    @endif
                    <div class="card-date">
                        {{ optional($item->tanggal)->format('d M Y') ?? 'Tanpa tanggal' }}
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @else
        <p style="color:#777;text-align:center;padding:30px 0;">Belum ada dokumentasi harian.</p>
        @endif
    </section>

    <!-- Event Sekolah Section -->
    <section class="about-section">
        <div class="section-header">
            <h2>Event Sekolah</h2>
            <div class="section-divider"></div>
        </div>

        @if($event->count() > 0)
        <div class="kegiatan-grid">
            @php $idx = 0; @endphp
            @foreach($event as $item)
            @php
                $firstPhoto = getFirstPhoto($item->foto);
                $idx++;
            @endphp
            @if($firstPhoto)
            <div class="kegiatan-card" style="animation-delay: {{ ($idx - 1) * 0.1 }}s">
                <div class="card-image">
                    <img src="{{ asset('storage/' . $firstPhoto) }}" alt="{{ $item->judul ?? 'Event sekolah' }}">
                </div>
                <div class="card-content">
                    <span class="card-badge">{{ $item->jenis ?? 'Event' }}</span>
                    <h3 class="card-title">{{ $item->judul ?? 'Kegiatan' }}</h3>
                    @if(!empty($item->deskripsi))
                    <p class="card-description">{{ $item->deskripsi }}</p>
                    @endif
                    <div class="card-date">
                        {{ optional($item->tanggal)->format('d M Y') ?? 'Tanpa tanggal' }}
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @else
        <p style="color:#777;text-align:center;padding:30px 0;">Belum ada event sekolah.</p>
        @endif
    </section>

    <!-- Kumpulan Rutin Section -->
    <section class="about-section">
        <div class="section-header">
            <h2>Kumpulan Rutin</h2>
            <div class="section-divider"></div>
        </div>

        @if($rutin->count() > 0)
        <div class="kegiatan-grid">
            @php $idx = 0; @endphp
            @foreach($rutin as $item)
            @php
                $firstPhoto = getFirstPhoto($item->foto);
                $idx++;
            @endphp
            @if($firstPhoto)
            <div class="kegiatan-card" style="animation-delay: {{ ($idx - 1) * 0.1 }}s">
                <div class="card-image">
                    <img src="{{ asset('storage/' . $firstPhoto) }}" alt="{{ $item->judul ?? 'Kumpulan rutin' }}">
                </div>
                <div class="card-content">
                    <span class="card-badge">{{ $item->jenis ?? 'Rutin' }}</span>
                    <h3 class="card-title">{{ $item->judul ?? 'Kegiatan' }}</h3>
                    @if(!empty($item->deskripsi))
                    <p class="card-description">{{ $item->deskripsi }}</p>
                    @endif
                    <div class="card-date">
                        {{ optional($item->tanggal)->format('d M Y') ?? 'Tanpa tanggal' }}
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @else
        <p style="color:#777;text-align:center;padding:30px 0;">Belum ada kumpulan rutin.</p>
        @endif
    </section>
</div>
