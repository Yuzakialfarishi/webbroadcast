@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h1>Tambah Pengurus</h1>
        <form method="POST" action="{{ route('admin.pengurus.store') }}" enctype="multipart/form-data">
            @csrf
            <div style="margin-bottom: 16px;">
                <label for="nama">Nama:</label><br>
                <input type="text" id="nama" name="nama" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                @error('nama')<span style="color: red;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 16px;">
                <label for="jabatan">Jabatan:</label><br>
                <input type="text" id="jabatan" name="jabatan" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                @error('jabatan')<span style="color: red;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 16px;">
                <label for="foto">Foto:</label><br>
                <input type="file" id="foto" name="foto" accept="image/*" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                @error('foto')<span style="color: red;">{{ $message }}</span>@enderror
            </div>

            <button type="submit" style="padding: 10px 20px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Simpan</button>
            <a href="{{ route('admin.pengurus.index') }}" style="padding: 10px 20px; background: #6c757d; color: white; text-decoration: none; border-radius: 4px;">Batal</a>
        </form>
    </div>
@endsection
