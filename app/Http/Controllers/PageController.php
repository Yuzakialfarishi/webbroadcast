<?php

namespace App\Http\Controllers;

use App\Models\Highlight;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $titles = ['Dokumentasi Harian', 'Event Sekolah', 'Kumpulan Rutin'];
        $highlights = Highlight::whereIn('title', $titles)
            ->take(3)
            ->get()
            ->sortBy(function ($item) use ($titles) {
                return array_search($item->title, $titles);
            })
            ->values();
        return view('pages.home', compact('highlights'));
    }

    public function about()
    {
        $profile = \App\Models\Profile::first();
        return view('pages.about', compact('profile'));
    }

    public function program()
    {
        return view('pages.program');
    }

    public function kegiatan()
    {
        $titles = ['Dokumentasi Harian', 'Event Sekolah', 'Kumpulan Rutin'];
        $highlights = Highlight::whereIn('title', $titles)
            ->take(3)
            ->get()
            ->sortBy(function ($item) use ($titles) {
                return array_search($item->title, $titles);
            })
            ->values();

        return view('pages.kegiatan', compact('highlights'));
    }

    public function schedule()
    {
        return view('pages.schedule');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
