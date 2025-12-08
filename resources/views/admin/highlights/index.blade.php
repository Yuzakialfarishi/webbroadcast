@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h1>Highlights</h1>
        <p><a href="{{ route('admin.highlights.create') }}" style="padding: 8px 16px; background: #007bff; color: white; text-decoration: none; border-radius: 4px;">Tambah Highlight</a></p>
        <table style="width:100%;border-collapse:collapse;margin-top:20px">
            <tr style="background:#eee">
                <th style="padding:8px;text-align:left">Judul</th>
                <th style="padding:8px;text-align:left">Deskripsi</th>
                <th style="padding:8px;text-align:left">Foto</th>
                <th style="padding:8px;text-align:left">Aksi</th>
            </tr>
            @forelse($highlights as $highlight)
                <tr style="border-bottom:1px solid #ddd">
                    <td style="padding:8px">{{ $highlight->title }}</td>
                    <td style="padding:8px">{{ Str::limit($highlight->description, 50) }}</td>
                    <td style="padding:8px">
                        @if($highlight->photo)
                            <img src="{{ asset('storage/' . $highlight->photo) }}" alt="{{ $highlight->title }}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">
                        @else
                            <span style="color:#999">Tidak ada</span>
                        @endif
                    </td>
                    <td style="padding:8px">
                        <a href="{{ route('admin.highlights.edit', $highlight) }}" style="color: #007bff; margin-right: 10px;">Edit</a>
                        <form method="POST" action="{{ route('admin.highlights.destroy', $highlight) }}" style="display:inline;margin:0" onsubmit="return confirm('Hapus highlight ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color: #dc3545; border: none; background: none; cursor: pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="padding:8px;text-align:center">Tidak ada highlight</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
