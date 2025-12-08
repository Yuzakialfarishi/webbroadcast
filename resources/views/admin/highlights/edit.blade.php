@extends('admin.layouts.app')

@section('content')
    <h2 style="font-size: 24px; color: #333; margin-bottom: 30px;">
        <i class="fas fa-edit"></i> Edit Highlight
    </h2>

    <div class="content-card">
        <form method="POST" action="{{ route('admin.highlights.update', $highlight) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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
                <label for="title" style="display: block; font-weight: 600; color: #333; margin-bottom: 8px;">
                    <i class="fas fa-heading"></i> Judul
                </label>
                <input type="text" id="title" name="title" value="{{ $highlight->title }}" required 
                       style="width: 100%; padding: 12px 15px; border: 1px solid #e0e0e0; border-radius: 8px; font-size: 14px; transition: border-color 0.3s;"
                       onblur="this.style.borderColor='#e0e0e0'" onfocus="this.style.borderColor='#667eea'">
                @error('title')<span style="color: #f44336; font-size: 13px; margin-top: 5px; display: block;"><i class="fas fa-times-circle"></i> {{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 25px;">
                <label for="description" style="display: block; font-weight: 600; color: #333; margin-bottom: 8px;">
                    <i class="fas fa-file-alt"></i> Deskripsi
                </label>
                <textarea id="description" name="description" 
                          style="width: 100%; padding: 12px 15px; border: 1px solid #e0e0e0; border-radius: 8px; font-size: 14px; min-height: 100px; font-family: Arial, sans-serif; transition: border-color 0.3s; resize: vertical;"
                          onblur="this.style.borderColor='#e0e0e0'" onfocus="this.style.borderColor='#667eea'">{{ $highlight->description }}</textarea>
                @error('description')<span style="color: #f44336; font-size: 13px; margin-top: 5px; display: block;"><i class="fas fa-times-circle"></i> {{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 25px;">
                <label for="photo" style="display: block; font-weight: 600; color: #333; margin-bottom: 8px;">
                    <i class="fas fa-image"></i> Foto
                </label>
                
                @if($highlight->photo)
                    <div style="margin-bottom: 20px;">
                        <div style="display: inline-block; border-radius: 10px; overflow: hidden; border: 2px solid #e0e0e0;">
                            <img src="{{ asset('storage/' . $highlight->photo) }}" alt="{{ $highlight->title }}" style="max-height: 200px; display: block;">
                        </div>
                        <p style="color: #999; font-size: 13px; margin-top: 10px;">
                            <i class="fas fa-check-circle"></i> Foto saat ini
                        </p>
                    </div>
                @endif

                <div style="position: relative;">
                    <input type="file" id="photo" name="photo" accept="image/*" 
                           style="position: absolute; opacity: 0; width: 100%; height: 100%; cursor: pointer;">
                    <label for="photo" style="display: block; padding: 40px; text-align: center; border: 2px dashed #e0e0e0; border-radius: 8px; cursor: pointer; background: #f9f9f9; transition: all 0.3s;"
                           onmouseover="this.style.borderColor='#667eea'; this.style.background='#f5f5ff';"
                           onmouseout="this.style.borderColor='#e0e0e0'; this.style.background='#f9f9f9';">
                        <i class="fas fa-cloud-upload-alt" style="font-size: 28px; color: #667eea; margin-bottom: 10px; display: block;"></i>
                        <span style="color: #667eea; font-weight: 600;">Klik untuk ubah foto atau drag & drop</span>
                        <p style="color: #999; font-size: 13px; margin: 8px 0 0;">Format: JPG, PNG. Maksimal 5MB</p>
                    </label>
                </div>
                @error('photo')<span style="color: #f44336; font-size: 13px; margin-top: 5px; display: block;"><i class="fas fa-times-circle"></i> {{ $message }}</span>@enderror
            </div>

            <div style="display: flex; gap: 12px; padding-top: 20px; border-top: 1px solid #e0e0e0;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
                <a href="{{ route('admin.highlights.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
@endsection
