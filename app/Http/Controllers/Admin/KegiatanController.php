<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::orderBy('tanggal','desc')->get();
        return view('admin.kegiatans.index', compact('kegiatans'));
    }

    public function create()
    {
        return view('admin.kegiatans.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul'=>'required|string|max:255',
            'deskripsi'=>'nullable|string',
            'jenis'=>'required|in:Dokumentasi Harian,Event Sekolah,Kumpulan Rutin',
            'tanggal'=>'nullable|date',
            'foto'=>'nullable|array',
            'foto.*'=>'image|max:4096',
        ]);

        if ($request->hasFile('foto')) {
            $paths = [];
            foreach ($request->file('foto') as $file) {
                $paths[] = $file->store('uploads','public');
            }
            $data['foto'] = json_encode($paths);
        }

        Kegiatan::create($data);
        return redirect()->route('admin.kegiatans.index')->with('status','Kegiatan ditambahkan');
    }

    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.kegiatans.edit', compact('kegiatan'));
    }

    public function update(Request $request, Kegiatan $kegiatan)
    {
        $data = $request->validate([
            'judul'=>'required|string|max:255',
            'deskripsi'=>'nullable|string',
            'jenis'=>'required|in:Dokumentasi Harian,Event Sekolah,Kumpulan Rutin',
            'tanggal'=>'nullable|date',
            'foto'=>'nullable|array',
            'foto.*'=>'image|max:4096',
        ]);

        if ($request->hasFile('foto')) {
            // Delete old photos if exists (handle json array or single string)
            if ($kegiatan->foto) {
                $existing = json_decode($kegiatan->foto, true);
                if (is_array($existing)) {
                    foreach ($existing as $p) {
                        \Storage::disk('public')->delete($p);
                    }
                } else {
                    \Storage::disk('public')->delete($kegiatan->foto);
                }
            }

            $paths = [];
            foreach ($request->file('foto') as $file) {
                $paths[] = $file->store('uploads','public');
            }
            $data['foto'] = json_encode($paths);
        }

        $kegiatan->update($data);
        return redirect()->route('admin.kegiatans.index')->with('status','Kegiatan diperbarui');
    }

    public function destroy(Kegiatan $kegiatan)
    {
        // Delete photo if exists
        if ($kegiatan->foto) {
            \Storage::disk('public')->delete($kegiatan->foto);
        }
        
        $kegiatan->delete();
        return redirect()->route('admin.kegiatans.index')->with('status','Kegiatan dihapus');
    }
}

