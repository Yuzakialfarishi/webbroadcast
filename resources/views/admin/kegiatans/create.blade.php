@extends('admin.layouts.app')

@section('content')
    <h2 style="font-size: 24px; color: #333; margin-bottom: 30px;">
        <i class="fas fa-calendar-plus"></i> Tambah Kegiatan Baru
    </h2>

    <div class="content-card">
        <form method="POST" action="{{ route('admin.kegiatans.store') }}" enctype="multipart/form-data">
            @csrf

            @if($errors->any())
                <div style="background: #ffebee; border-left: 4px solid #f44336; padding: 15px; border-radius: 8px; margin-bottom: 20px; color: #c62828;">
                    <strong><i class="fas fa-exclamation-circle"></i> Terjadi Kesalahan:</strong>
                    <ul style="margin: 10px 0 0 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div style="margin-bottom: 25px;">
                <label for="judul" style="display: block; font-weight: 600; color: #333; margin-bottom: 8px;">
                    <i class="fas fa-heading"></i> Judul
                </label>
                <input type="text" id="judul" name="judul" required 
                       style="width: 100%; padding: 12px 15px; border: 1px solid #e0e0e0; border-radius: 8px; font-size: 14px; transition: border-color 0.3s;"
                       value="{{ old('judul') }}"
                       onblur="this.style.borderColor='#e0e0e0'" onfocus="this.style.borderColor='#667eea'">
                @error('judul')<span style="color: #f44336; font-size: 13px; margin-top: 5px; display: block;"><i class="fas fa-times-circle"></i> {{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 25px;">
                <label for="deskripsi" style="display: block; font-weight: 600; color: #333; margin-bottom: 8px;">
                    <i class="fas fa-file-alt"></i> Deskripsi
                </label>
                <textarea id="deskripsi" name="deskripsi" 
                          style="width: 100%; padding: 12px 15px; border: 1px solid #e0e0e0; border-radius: 8px; font-size: 14px; min-height: 120px; font-family: Arial, sans-serif; transition: border-color 0.3s; resize: vertical;"
                          onblur="this.style.borderColor='#e0e0e0'" onfocus="this.style.borderColor='#667eea'">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')<span style="color: #f44336; font-size: 13px; margin-top: 5px; display: block;"><i class="fas fa-times-circle"></i> {{ $message }}</span>@enderror
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 25px;">
                <div>
                    <label for="jenis" style="display: block; font-weight: 600; color: #333; margin-bottom: 8px;">
                        <i class="fas fa-tag"></i> Jenis
                    </label>
                    <select id="jenis" name="jenis" required 
                            style="width: 100%; padding: 12px 15px; border: 1px solid #e0e0e0; border-radius: 8px; font-size: 14px; transition: border-color 0.3s;"
                            onblur="this.style.borderColor='#e0e0e0'" onfocus="this.style.borderColor='#667eea'">
                        <option value="">Pilih Jenis</option>
                        <option value="Dokumentasi Harian" {{ old('jenis') == 'Dokumentasi Harian' ? 'selected' : '' }}>Dokumentasi Harian</option>
                        <option value="Event Sekolah" {{ old('jenis') == 'Event Sekolah' ? 'selected' : '' }}>Event Sekolah</option>
                        <option value="Kumpulan Rutin" {{ old('jenis') == 'Kumpulan Rutin' ? 'selected' : '' }}>Kumpulan Rutin</option>
                    </select>
                    @error('jenis')<span style="color: #f44336; font-size: 13px; margin-top: 5px; display: block;"><i class="fas fa-times-circle"></i> {{ $message }}</span>@enderror
                </div>

                <div>
                    <label for="tanggal" style="display: block; font-weight: 600; color: #333; margin-bottom: 8px;">
                        <i class="fas fa-calendar"></i> Tanggal
                    </label>
                    <input type="date" id="tanggal" name="tanggal" 
                           style="width: 100%; padding: 12px 15px; border: 1px solid #e0e0e0; border-radius: 8px; font-size: 14px; transition: border-color 0.3s;"
                           value="{{ old('tanggal') }}"
                           onblur="this.style.borderColor='#e0e0e0'" onfocus="this.style.borderColor='#667eea'">
                    @error('tanggal')<span style="color: #f44336; font-size: 13px; margin-top: 5px; display: block;"><i class="fas fa-times-circle"></i> {{ $message }}</span>@enderror
                </div>
            </div>

            <div style="margin-bottom: 25px;">
                <label for="foto" style="display: block; font-weight: 600; color: #333; margin-bottom: 8px;">
                    <i class="fas fa-image"></i> Foto
                </label>
                <div style="position: relative;">
                    <input type="file" id="foto" name="foto[]" accept="image/*" multiple 
                           style="position: absolute; opacity: 0; width: 100%; height: 100%; cursor: pointer;">
                    <label for="foto" style="display: block; padding: 40px; text-align: center; border: 2px dashed #e0e0e0; border-radius: 8px; cursor: pointer; background: #f9f9f9; transition: all 0.3s;"
                           onmouseover="this.style.borderColor='#667eea'; this.style.background='#f5f5ff';"
                           onmouseout="this.style.borderColor='#e0e0e0'; this.style.background='#f9f9f9';">
                        <i class="fas fa-cloud-upload-alt" style="font-size: 28px; color: #667eea; margin-bottom: 10px; display: block;"></i>
                        <span style="color: #667eea; font-weight: 600;">Klik untuk upload (bisa banyak) atau drag & drop</span>
                        <p style="color: #999; font-size: 13px; margin: 8px 0 0;">Format: JPG, PNG. Maksimal 5MB per file</p>
                    </label>
                </div>
                @error('foto')<span style="color: #f44336; font-size: 13px; margin-top: 5px; display: block;"><i class="fas fa-times-circle"></i> {{ $message }}</span>@enderror
            </div>

            <div style="display: flex; gap: 12px; padding-top: 20px; border-top: 1px solid #e0e0e0;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Kegiatan
                </button>
                <a href="{{ route('admin.kegiatans.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
@endsection
