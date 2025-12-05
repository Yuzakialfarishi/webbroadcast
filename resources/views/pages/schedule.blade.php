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
