<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('pages.team', compact('pengurus'));
    }
}
