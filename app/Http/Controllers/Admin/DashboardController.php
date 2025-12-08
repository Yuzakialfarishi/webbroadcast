<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use App\Models\Pengurus;
use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahKegiatan = Kegiatan::count();
        $jumlahPengurus = Pengurus::count();
        $profileFilled = Profile::count() > 0;

        return view('admin.dashboard', compact('jumlahKegiatan','jumlahPengurus','profileFilled'));
    }
}
