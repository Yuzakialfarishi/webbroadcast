@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h1>Kegiatan</h1>
        <p><a href="{{ route('admin.kegiatans.create') }}">Tambah Kegiatan</a></p>
        <table style="width:100%;border-collapse:collapse">
            <tr style="background:#eee"><th style="padding:8px">Judul</th><th style="padding:8px">Jenis</th><th style="padding:8px">Tanggal</th></tr>
            @foreach($kegiatans as $k)
                <tr>
                    <td style="padding:8px">{{ $k->judul }}</td>
                    <td style="padding:8px">{{ $k->jenis }}</td>
                    <td style="padding:8px">{{ $k->tanggal }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
