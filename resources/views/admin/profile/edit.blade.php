@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h1>Profil Broadcast</h1>

        <form method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Nama</label><br>
                <input type="text" name="nama" value="{{ old('nama', $profile->nama ?? '') }}">
            </div>
            <div>
                <label>Deskripsi</label><br>
                <textarea name="deskripsi">{{ old('deskripsi', $profile->deskripsi ?? '') }}</textarea>
            </div>
            <div>
                <label>Visi</label><br>
                <textarea name="visi">{{ old('visi', $profile->visi ?? '') }}</textarea>
            </div>
            <div>
                <label>Misi</label><br>
                <textarea name="misi">{{ old('misi', $profile->misi ?? '') }}</textarea>
            </div>
            <div>
                <label>Jadwal</label><br>
                <input type="text" name="jadwal" value="{{ old('jadwal', $profile->jadwal ?? '') }}">
            </div>
            <div>
                <label>Logo (gambar)</label><br>
                <input type="file" name="logo">
                @if(!empty($profile->logo))
                    <div><img src="{{ asset('storage/'.$profile->logo) }}" alt="logo" style="max-height:80px"></div>
                @endif
            </div>
            <div style="margin-top:8px">
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection
