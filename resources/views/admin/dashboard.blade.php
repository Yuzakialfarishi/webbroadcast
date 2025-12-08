@extends('admin.layouts.app')

@section('content')
    <div class="stats-grid">
        <div class="stat-card blue">
            <div class="stat-icon">
                <i class="fas fa-calendar-check"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $jumlahKegiatan }}</h3>
                <p>Total Kegiatan</p>
            </div>
        </div>

        <div class="stat-card green">
            <div class="stat-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $jumlahPengurus }}</h3>
                <p>Total Pengurus</p>
            </div>
        </div>

        <div class="stat-card orange">
            <div class="stat-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $jumlahHighlights ?? 0 }}</h3>
                <p>Total Highlights</p>
            </div>
        </div>

        <div class="stat-card red">
            <div class="stat-icon">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $profileFilled ? '✓' : '✗' }}</h3>
                <p>Status Profil</p>
            </div>
        </div>
    </div>

    <div class="content-card">
        <h2 style="margin-bottom: 25px; color: #333;">
            <i class="fas fa-info-circle"></i> Informasi Dashboard
        </h2>
        <div style="line-height: 1.8; color: #666;">
            <p><strong>Total Kegiatan:</strong> {{ $jumlahKegiatan }} kegiatan</p>
            <p><strong>Total Pengurus:</strong> {{ $jumlahPengurus }} orang</p>
            <p><strong>Status Profil:</strong> <span style="color: {{ $profileFilled ? '#4caf50' : '#f44336' }};">
                {{ $profileFilled ? '✓ Sudah terisi' : '✗ Belum terisi' }}
            </span></p>
            <hr style="margin: 20px 0; border: none; border-top: 1px solid #e0e0e0;">
            <p style="color: #999; font-size: 14px;">
                <i class="fas fa-lightbulb"></i> Gunakan menu di sebelah kiri untuk mengelola konten broadcast Anda.
            </p>
        </div>
    </div>
@endsection
