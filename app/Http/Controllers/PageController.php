<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function program()
    {
        return view('pages.program');
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
