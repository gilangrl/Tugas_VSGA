<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Event;
use App\Models\Gallery;

class HalamanUtamaController extends Controller
{
    public function index()
    {
        return view('halamanDepan.index');
    }

    
    public function artikel()
    {
        $data = Artikel::all();
        return view('halamanDepan.artikel', compact('data'));
    }

    public function event()
    {
        $event = Event::all();
        return view('halamanDepan.event', compact('event'));
    }

    public function gallery()
    {
        $gallery = Gallery::all();
        return view('halamanDepan.gallery', compact('gallery'));
    }


    public function halamnDepanKlien()
    {
        $klien = Gallery::all();
        return view('halamanDepan.klienKami', compact('klien'));
    }
    
}
