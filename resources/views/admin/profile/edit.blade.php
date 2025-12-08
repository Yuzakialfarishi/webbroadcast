@extends('admin.layouts.app')

@section('content')
    <h2 style="font-size: 24px; color: #333; margin-bottom: 30px;">
        <i class="fas fa-user"></i> Edit Profil Broadcast
    </h2>

    <div class="content-card">
        <form method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
            @csrf

            <div style="margin-bottom: 25px;">
                <label style="display: block; font-weight: 600; color: #333; margin-bottom: 10px;">
                    <i class="fas fa-image"></i> Logo (Gambar)
                </label>
                
                @if(!empty($profile->logo))
                    <div style="margin-bottom: 15px;">
                        <div style="display: inline-block; border-radius: 10px; overflow: hidden; border: 2px solid #e0e0e0;">
                            <img src="{{ asset('storage/'.$profile->logo) }}" alt="logo" style="max-height: 200px; display: block;">
                        </div>
                        <p style="color: #999; font-size: 13px; margin-top: 10px;">
                            <i class="fas fa-check-circle"></i> Logo saat ini
                        </p>
                    </div>
                @endif

                <div style="position: relative; display: inline-block;">
                    <input type="file" name="logo" accept="image/*" id="logoInput" 
                           style="position: absolute; opacity: 0; width: 100%; height: 100%; cursor: pointer;">
                    <label for="logoInput" class="btn btn-primary" style="margin: 0; cursor: pointer;">
                        <i class="fas fa-upload"></i> Pilih Logo Baru
                    </label>
                </div>
                <p style="color: #999; font-size: 13px; margin-top: 10px;">
                    Format: JPG, PNG. Ukuran maksimal: 2MB
                </p>
            </div>

            @if($errors->any())
                <div style="background: #ffebee; border-left: 4px solid #f44336; padding: 15px; border-radius: 8px; margin-bottom: 20px; color: #c62828;">
                    <strong><i class="fas fa-exclamation-circle"></i> Error:</strong>
                    <ul style="margin: 10px 0 0 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div style="display: flex; gap: 10px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
@endsection
