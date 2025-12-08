@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h1>Profil Broadcast</h1>

        <form method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Logo (gambar)</label><br>
                <input type="file" name="logo" accept="image/*">
                @if(!empty($profile->logo))
                    <div style="margin-top:8px"><img src="{{ asset('storage/'.$profile->logo) }}" alt="logo" style="max-height:160px"></div>
                @endif
            </div>
            <div style="margin-top:12px">
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection
