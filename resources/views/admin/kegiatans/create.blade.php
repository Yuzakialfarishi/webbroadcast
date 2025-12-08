@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h1>Tambah Kegiatan</h1>
        <form method="POST" action="{{ route('admin.kegiatans.store') }}" enctype="multipart/form-data">
            @csrf
            <div style="margin-bottom: 16px;">
                <label for="judul">Judul:</label><br>
                <input type="text" id="judul" name="judul" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                @error('judul')<span style="color: red;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 16px;">
                <label for="deskripsi">Deskripsi:</label><br>
                <textarea id="deskripsi" name="deskripsi" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; height: 100px;"></textarea>
                @error('deskripsi')<span style="color: red;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 16px;">
                <label for="jenis">Jenis:</label><br>
                <select id="jenis" name="jenis" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="">Pilih Jenis</option>
                    <option value="harian">Harian</option>
                    <option value="event">Event</option>
                </select>
                @error('jenis')<span style="color: red;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 16px;">
                <label for="tanggal">Tanggal:</label><br>
                <input type="date" id="tanggal" name="tanggal" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                @error('tanggal')<span style="color: red;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 16px;">
                <label for="foto">Foto:</label><br>
                <input type="file" id="foto" name="foto" accept="image/*" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                @error('foto')<span style="color: red;">{{ $message }}</span>@enderror
            </div>

            <button type="submit" style="padding: 10px 20px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Simpan</button>
            <a href="{{ route('admin.kegiatans.index') }}" style="padding: 10px 20px; background: #6c757d; color: white; text-decoration: none; border-radius: 4px;">Batal</a>
        </form>
    </div>
@endsection
