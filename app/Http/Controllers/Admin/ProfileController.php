<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::first();
        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'nama' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'jadwal' => 'nullable|string',
            'logo' => 'nullable|image|max:2048',
        ]);

        $profile = Profile::first();

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('uploads','public');
            $data['logo'] = $path;
        }

        if ($profile) {
            $profile->update($data);
        } else {
            Profile::create($data);
        }

        return redirect()->route('admin.profile.edit')->with('status','Profil disimpan.');
    }
}
