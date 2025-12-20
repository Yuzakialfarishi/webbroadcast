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
        @php
            // Group pengurus by jabatan
            $pembina = $pengurus->filter(fn($p) => $p->jabatan === 'Pembina')->first();
            $ketua = $pengurus->filter(fn($p) => $p->jabatan === 'Ketua')->first();
            $wakilKetua = $pengurus->filter(fn($p) => $p->jabatan === 'Wakil Ketua')->first();
            $sekretaris = $pengurus->filter(fn($p) => $p->jabatan === 'Sekretaris')->first();
            $wakilSekretaris = $pengurus->filter(fn($p) => $p->jabatan === 'Wakil Sekretaris')->first();
            $bendahara = $pengurus->filter(fn($p) => $p->jabatan === 'Bendahara')->first();
            $wakilBendahara = $pengurus->filter(fn($p) => $p->jabatan === 'Wakil Bendahara')->first();
            $pj = $pengurus->filter(fn($p) => $p->jabatan === 'Penanggung Jawab')->first();
            $divisions = $pengurus->filter(function($p) {
                return strpos($p->jabatan, 'Divisi') !== false;
            });
        @endphp

        <!-- Level 1: Pembina (Paling Atas) -->
        <div class="org-level level-1">
            <div class="org-box pembina">
                <div class="org-photo">
                    @if($pembina && $pembina->foto)
                        <img src="{{ asset('storage/' . $pembina->foto) }}" alt="{{ $pembina->nama }}">
                    @else
                        <img src="/img/pembina.jpg" alt="Pembina">
                    @endif
                </div>
                <h3>{{ $pembina->nama ?? 'Nama Pembina' }}</h3>
                <p>{{ $pembina->jabatan ?? 'Pembina' }}</p>
            </div>
        </div>

        <!-- Connector Line -->
        <div class="connector-line"></div>

        <!-- Level 2: Ketua dan Wakil Ketua (vertikal) -->
        <div class="org-level level-2">
            <div class="position-pair">
                <div class="org-box ketua">
                    <div class="org-photo">
                        @if($ketua && $ketua->foto)
                            <img src="{{ asset('storage/' . $ketua->foto) }}" alt="{{ $ketua->nama }}">
                        @else
                            <img src="/img/ketua.jpg" alt="Ketua">
                        @endif
                    </div>
                    <h3>{{ $ketua->nama ?? 'Nama Ketua' }}</h3>
                    <p>{{ $ketua->jabatan ?? 'Ketua' }}</p>
                </div>

                @if($wakilKetua)
                <div class="org-box ketua">
                    <div class="org-photo">
                        @if($wakilKetua->foto)
                            <img src="{{ asset('storage/' . $wakilKetua->foto) }}" alt="{{ $wakilKetua->nama }}">
                        @else
                            <img src="/img/wakil-ketua.jpg" alt="Wakil Ketua">
                        @endif
                    </div>
                    <h3>{{ $wakilKetua->nama }}</h3>
                    <p>{{ $wakilKetua->jabatan }}</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Connector Line -->
        <div class="connector-line"></div>

        <!-- Level 3: Sekretaris & Wakil | Bendahara & Wakil -->
        <div class="org-level level-3">
            <!-- Sekretaris Pair -->
            <div class="position-pair">
                @if($sekretaris)
                <div class="org-box divisi">
                    <div class="org-photo">
                        @if($sekretaris->foto)
                            <img src="{{ asset('storage/' . $sekretaris->foto) }}" alt="{{ $sekretaris->nama }}">
                        @else
                            <img src="/img/sekretaris.jpg" alt="Sekretaris">
                        @endif
                    </div>
                    <h3>{{ $sekretaris->nama }}</h3>
                    <p>{{ $sekretaris->jabatan }}</p>
                </div>
                @endif

                @if($wakilSekretaris)
                <div class="org-box divisi">
                    <div class="org-photo">
                        @if($wakilSekretaris->foto)
                            <img src="{{ asset('storage/' . $wakilSekretaris->foto) }}" alt="{{ $wakilSekretaris->nama }}">
                        @else
                            <img src="/img/wakil-sekretaris.jpg" alt="Wakil Sekretaris">
                        @endif
                    </div>
                    <h3>{{ $wakilSekretaris->nama }}</h3>
                    <p>{{ $wakilSekretaris->jabatan }}</p>
                </div>
                @endif
            </div>

            <!-- Bendahara Pair -->
            <div class="position-pair">
                @if($bendahara)
                <div class="org-box divisi">
                    <div class="org-photo">
                        @if($bendahara->foto)
                            <img src="{{ asset('storage/' . $bendahara->foto) }}" alt="{{ $bendahara->nama }}">
                        @else
                            <img src="/img/bendahara.jpg" alt="Bendahara">
                        @endif
                    </div>
                    <h3>{{ $bendahara->nama }}</h3>
                    <p>{{ $bendahara->jabatan }}</p>
                </div>
                @endif

                @if($wakilBendahara)
                <div class="org-box divisi">
                    <div class="org-photo">
                        @if($wakilBendahara->foto)
                            <img src="{{ asset('storage/' . $wakilBendahara->foto) }}" alt="{{ $wakilBendahara->nama }}">
                        @else
                            <img src="/img/wakil-bendahara.jpg" alt="Wakil Bendahara">
                        @endif
                    </div>
                    <h3>{{ $wakilBendahara->nama }}</h3>
                    <p>{{ $wakilBendahara->jabatan }}</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Connector Line -->
        <div class="connector-line"></div>

        <!-- Level 4: Ketua Divisi dan Wakil (Fotografi, Videografi, Desain Grafis, Jurnalistik) -->
        <div class="org-level level-4">
            @php
                // Group divisions into pairs (Ketua dan Wakil)
                $divisionGroups = [
                    'Fotografi' => $divisions->filter(fn($d) => strpos($d->jabatan, 'Fotografi') !== false),
                    'Videografi' => $divisions->filter(fn($d) => strpos($d->jabatan, 'Videografi') !== false),
                    'Desain Grafis' => $divisions->filter(fn($d) => strpos($d->jabatan, 'Desain Grafis') !== false),
                    'Jurnalistik' => $divisions->filter(fn($d) => strpos($d->jabatan, 'Jurnalistik') !== false),
                ];
            @endphp

            @foreach($divisionGroups as $divName => $divGroup)
                @if($divGroup->count() > 0)
                <div class="position-pair">
                    @foreach($divGroup as $divisi)
                    <div class="org-box anggota">
                        <div class="org-photo">
                            @if($divisi->foto)
                                <img src="{{ asset('storage/' . $divisi->foto) }}" alt="{{ $divisi->nama }}">
                            @else
                                <img src="/img/anggota1.jpg" alt="Divisi">
                            @endif
                        </div>
                        <h3>{{ $divisi->nama }}</h3>
                        <p>{{ $divisi->jabatan }}</p>
                    </div>
                    @endforeach
                </div>
                @endif
            @endforeach
        </div>

        <!-- Connector Line -->
        <div class="connector-line"></div>

        <!-- Level 5: PJ (Penanggung Jawab) - Paling Akhir -->
        @if($pj)
        <div class="org-level level-5">
            <div class="org-box pj">
                <div class="org-photo">
                    @if($pj->foto)
                        <img src="{{ asset('storage/' . $pj->foto) }}" alt="{{ $pj->nama }}">
                    @else
                        <img src="/img/pj.jpg" alt="Penanggung Jawab">
                    @endif
                </div>
                <h3>{{ $pj->nama }}</h3>
                <p>{{ $pj->jabatan }}</p>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection