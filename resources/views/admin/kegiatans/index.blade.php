@extends('admin.layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h2 style="font-size: 24px; color: #333; margin: 0;">
            <i class="fas fa-calendar-alt"></i> Daftar Kegiatan
        </h2>
        <a href="{{ route('admin.kegiatans.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Kegiatan
        </a>
    </div>

    <div class="content-card">
        @if($kegiatans->isEmpty())
            <div style="text-align: center; padding: 60px 20px; color: #999;">
                <i class="fas fa-inbox" style="font-size: 48px; margin-bottom: 15px; display: block;"></i>
                <p>Belum ada kegiatan. <a href="{{ route('admin.kegiatans.create') }}" style="color: #667eea;">Buat yang baru</a></p>
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th style="width: 40%;">Judul</th>
                        <th style="width: 20%;">Jenis</th>
                        <th style="width: 20%;">Tanggal</th>
                        <th style="width: 20%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kegiatans as $k)
                        <tr>
                            <td>
                                <strong>{{ $k->judul }}</strong>
                                <br>
                                <small style="color: #999;">{{ Str::limit($k->deskripsi ?? '-', 50) }}</small>
                            </td>
                            <td>
                                <span style="background: #e3f2fd; color: #1976d2; padding: 4px 12px; border-radius: 20px; font-size: 13px; font-weight: 600;">
                                    {{ $k->jenis }}
                                </span>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($k->tanggal)->format('d M Y') }}</td>
                            <td style="text-align: center;">
                                <a href="{{ route('admin.kegiatans.edit', $k->id) }}" class="btn btn-small" style="background: #2196f3; color: #fff; margin-right: 5px;">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.kegiatans.destroy', $k->id) }}" method="POST" style="display: inline;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-small btn-danger" onclick="return confirm('Hapus kegiatan ini?')">
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
