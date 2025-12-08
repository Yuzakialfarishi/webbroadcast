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
        // Only accept logo uploads from admin profile page to avoid overwriting other fields.
        $request->validate([
            'logo' => 'nullable|image|max:2048',
        ]);

        $profile = Profile::first();

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('uploads','public');

            if ($profile) {
                $profile->update(['logo' => $path]);
            } else {
                Profile::create(['logo' => $path]);
            }

            return redirect()->route('admin.profile.edit')->with('status','Logo profil disimpan.');
        }

        return redirect()->route('admin.profile.edit')->with('status','Tidak ada perubahan.');
    }
}
