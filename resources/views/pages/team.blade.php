@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/pengurus.css') }}">
@endsection

@section('content')
    <div class="card">
        <h1>Struktur Organisasi</h1>

        <p>Di bawah ini adalah struktur organisasi. Anda dapat menambahkan anggota dan foto melalui panel admin.</p>

        <style>
            .org-grid{display:grid;grid-template-columns:1fr;gap:18px}
            .org-top{display:flex;justify-content:center}
            .org-top .card-person{max-width:260px;text-align:center}
            .org-sections{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px;margin-top:12px}
            .person{background:#fff;padding:8px;border-radius:8px;text-align:center}
            .person img{width:120px;height:120px;object-fit:cover;border-radius:50%;border:4px solid #f1f1f1}
            .person-name{font-weight:700;margin-top:8px}
            .person-role{color:#666;font-size:13px}
        </style>

        <div class="org-grid">
            {{-- Show Pembina centered at top if exists --}}
            <div class="org-top">
                @if(isset($groups['Pembina']))
                    @foreach($groups['Pembina'] as $pembina)
                        <div class="card-person">
                            <div class="person">
                                <img alt="{{ $pembina->nama }}" src="{{ $pembina->foto ? asset('storage/'.$pembina->foto) : asset('images/avatar-placeholder.png') }}">
                                <div class="person-name">{{ $pembina->nama }}</div>
                                <div class="person-role">{{ $pembina->jabatan }}</div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            {{-- Sections grid following orderedSections - show ALL sections --}}
            <div class="org-sections">
                @foreach($orderedSections as $section)
                    {{-- Skip Pembina (already shown at top) and Lainnya (show at end) --}}
                    @if($section === 'Pembina' || $section === 'Lainnya')
                        @continue
                    @endif

                    @php $items = $groups[$section] ?? collect(); @endphp
                    <div>
                        <h3 style="background:#ffd43b;padding:8px;border-radius:8px;font-size:14px">{{ $section }}</h3>
                        <div style="margin-top:8px;display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:10px">
                            @forelse($items as $p)
                                <div class="person">
                                    <img alt="{{ $p->nama }}" src="{{ $p->foto ? asset('storage/'.$p->foto) : asset('images/avatar-placeholder.png') }}">
                                    <div class="person-name">{{ $p->nama }}</div>
                                    <div class="person-role">{{ $p->jabatan }}</div>
                                </div>
                            @empty
                                <p style="color:#999;font-size:13px">Belum ada anggota</p>
                            @endforelse
                        </div>
                    </div>
                @endforeach

                {{-- Show Lainnya section at the end --}}
                @php $lainnya = $groups['Lainnya'] ?? collect(); @endphp
                <div>
                    <h3 style="background:#ffd43b;padding:8px;border-radius:8px;font-size:14px">Lainnya</h3>
                    <div style="margin-top:8px;display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:10px">
                        @forelse($lainnya as $p)
                            <div class="person">
                                <img alt="{{ $p->nama }}" src="{{ $p->foto ? asset('storage/'.$p->foto) : asset('images/avatar-placeholder.png') }}">
                                <div class="person-name">{{ $p->nama }}</div>
                                <div class="person-role">{{ $p->jabatan }}</div>
                            </div>
                        @empty
                            <p style="color:#999;font-size:13px">Belum ada anggota</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
