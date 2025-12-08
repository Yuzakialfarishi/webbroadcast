@extends('admin.layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h2 style="font-size: 24px; color: #333; margin: 0;">
            <i class="fas fa-star"></i> Daftar Highlights
        </h2>
        <a href="{{ route('admin.highlights.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Highlight
        </a>
    </div>

    <div class="content-card">
        @if($highlights->isEmpty())
            <div style="text-align: center; padding: 60px 20px; color: #999;">
                <i class="fas fa-inbox" style="font-size: 48px; margin-bottom: 15px; display: block;"></i>
                <p>Belum ada highlight. <a href="{{ route('admin.highlights.create') }}" style="color: #667eea;">Buat yang baru</a></p>
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th style="width: 30%;">Judul</th>
                        <th style="width: 30%;">Deskripsi</th>
                        <th style="width: 15%; text-align: center;">Foto</th>
                        <th style="width: 20%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($highlights as $key => $highlight)
                        <tr>
                            <td style="color: #999;">{{ $key + 1 }}</td>
                            <td>
                                <strong>{{ $highlight->title }}</strong>
                            </td>
                            <td>
                                <small style="color: #999;">{{ Str::limit($highlight->description, 50) }}</small>
                            </td>
                            <td style="text-align: center;">
                                @if($highlight->photo)
                                    <div style="display: inline-block; width: 50px; height: 50px; border-radius: 8px; overflow: hidden; border: 2px solid #e0e0e0;">
                                        <img src="{{ asset('storage/' . $highlight->photo) }}" alt="{{ $highlight->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                @else
                                    <span style="color: #ccc;">
                                        <i class="fas fa-image" style="font-size: 24px;"></i>
                                    </span>
                                @endif
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('admin.highlights.edit', $highlight) }}" class="btn btn-small" style="background: #2196f3; color: #fff; margin-right: 5px;">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.highlights.destroy', $highlight) }}" method="POST" style="display: inline;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-small btn-danger" onclick="return confirm('Hapus highlight ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
