<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function kegiatan()
    {
        return view('pages.kegiatan');
    }

    public function program()
    {
        return view('pages.program');
    }

    public function team()
    {
        $pengurus = Pengurus::orderBy('nama')->get();

        // Group by jabatan, fallback to 'Lainnya'
        $groups = $pengurus->groupBy(function ($item) {
            return $item->jabatan ?: 'Lainnya';
        });

        // Define an ordered list of sections to display
        // Structure: Pembina, Ketua, Wakil Ketua, Sekertaris, Bendahara, 
        // + Divisi Foto (Ketua & Wakil), Divisi Video (Ketua & Wakil), 
        // + Divisi Desain Grafis (Ketua & Wakil), Divisi Jurnalistik (Ketua & Wakil), + Penanggung Jawab
        $orderedSections = [
            'Pembina',
            'Ketua',
            'Wakil Ketua',
            'Sekertaris',
            'Bendahara',
            'Ketua Divisi Foto',
            'Wakil Ketua Divisi Foto',
            'Ketua Divisi Video',
            'Wakil Ketua Divisi Video',
            'Ketua Divisi Desain Grafis',
            'Wakil Ketua Divisi Desain Grafis',
            'Ketua Divisi Jurnalistik',
            'Wakil Ketua Divisi Jurnalistik',
            'Penanggung Jawab',
        ];

        return view('pages.team', compact('groups','orderedSections'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
