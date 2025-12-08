@extends('admin.layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h2 style="font-size: 24px; color: #333; margin: 0;">
            <i class="fas fa-users"></i> Daftar Pengurus
        </h2>
        <a href="{{ route('admin.pengurus.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Pengurus
        </a>
    </div>

    <div class="content-card">
        @if($pengurus->isEmpty())
            <div style="text-align: center; padding: 60px 20px; color: #999;">
                <i class="fas fa-inbox" style="font-size: 48px; margin-bottom: 15px; display: block;"></i>
                <p>Belum ada pengurus. <a href="{{ route('admin.pengurus.create') }}" style="color: #667eea;">Tambahkan yang baru</a></p>
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th style="width: 35%;">Nama</th>
                        <th style="width: 30%;">Jabatan</th>
                        <th style="width: 25%;">Kontak</th>
                        <th style="width: 10%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengurus as $p)
                        <tr>
                            <td>
                                <strong>{{ $p->nama }}</strong>
                            </td>
                            <td>
                                <span style="background: #f3e5f5; color: #7b1fa2; padding: 4px 12px; border-radius: 20px; font-size: 13px; font-weight: 600;">
                                    {{ $p->jabatan }}
                                </span>
                            </td>
                            <td>{{ $p->kontak ?? '-' }}</td>
                            <td style="text-align: center;">
                                <a href="{{ route('admin.pengurus.edit', $p->id) }}" class="btn btn-small" style="background: #2196f3; color: #fff; margin-right: 5px;">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.pengurus.destroy', $p->id) }}" method="POST" style="display: inline;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-small btn-danger" onclick="return confirm('Hapus pengurus ini?')">
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
