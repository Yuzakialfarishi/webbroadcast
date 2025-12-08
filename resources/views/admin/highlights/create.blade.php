@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h1>Tambah Highlight</h1>
        <form method="POST" action="{{ route('admin.highlights.store') }}" enctype="multipart/form-data">
            @csrf
            <div style="margin-bottom: 16px;">
                <label for="title">Judul:</label><br>
                <input type="text" id="title" name="title" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                @error('title')<span style="color: red;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 16px;">
                <label for="description">Deskripsi:</label><br>
                <textarea id="description" name="description" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; height: 80px;"></textarea>
                @error('description')<span style="color: red;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 16px;">
                <label for="photo">Foto:</label><br>
                <input type="file" id="photo" name="photo" accept="image/*" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                @error('photo')<span style="color: red;">{{ $message }}</span>@enderror
            </div>

            <button type="submit" style="padding: 10px 20px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Simpan</button>
            <a href="{{ route('admin.highlights.index') }}" style="padding: 10px 20px; background: #6c757d; color: white; text-decoration: none; border-radius: 4px;">Batal</a>
        </form>
    </div>
@endsection
