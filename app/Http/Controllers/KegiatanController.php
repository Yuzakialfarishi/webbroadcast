<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    public function index()
    {
        $titles = ['Dokumentasi Harian', 'Event Sekolah', 'Kumpulan Rutin'];
        $highlights = Highlight::whereIn('title', $titles)
            ->take(3)
            ->get()
            ->sortBy(function ($item) use ($titles) {
                return array_search($item->title, $titles);
            })
            ->values();

        // Get all kegiatans from database
        $kegiatans = Kegiatan::orderBy('tanggal', 'desc')->get();

        return view('pages.kegiatan', compact('highlights', 'kegiatans'));
    }
}
