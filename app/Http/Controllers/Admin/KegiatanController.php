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
            'jenis'=>'required|in:harian,event',
            'tanggal'=>'nullable|date',
            'foto'=>'nullable|image|max:4096',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('uploads','public');
        }

        Kegiatan::create($data);
        return redirect()->route('admin.kegiatans.index')->with('status','Kegiatan ditambahkan');
    }
}
