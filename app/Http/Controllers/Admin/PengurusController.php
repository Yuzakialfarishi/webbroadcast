<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::orderBy('nama')->get();
        return view('admin.pengurus.index', compact('pengurus'));
    }

    public function create()
    {
        return view('admin.pengurus.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'=>'required|string|max:255',
            'jabatan'=>'nullable|string|max:255',
            'foto'=>'nullable|image|max:4096',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('uploads','public');
        }

        Pengurus::create($data);
        return redirect()->route('admin.pengurus.index')->with('status','Pengurus ditambahkan');
    }
}
