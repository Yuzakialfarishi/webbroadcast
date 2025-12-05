@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h1>Dashboard</h1>
        <p><strong>Jumlah kegiatan:</strong> {{ $jumlahKegiatan }}</p>
        <p><strong>Jumlah pengurus:</strong> {{ $jumlahPengurus }}</p>
        <p><strong>Profil terisi:</strong> {{ $profileFilled ? 'Ya' : 'Belum' }}</p>
    </div>
@endsection
