@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h1>Pengurus</h1>
        <p><a href="{{ route('admin.pengurus.create') }}">Tambah Pengurus</a></p>
        <table style="width:100%;border-collapse:collapse">
            <tr style="background:#eee"><th style="padding:8px">Nama</th><th style="padding:8px">Jabatan</th></tr>
            @foreach($pengurus as $p)
                <tr>
                    <td style="padding:8px">{{ $p->nama }}</td>
                    <td style="padding:8px">{{ $p->jabatan }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
