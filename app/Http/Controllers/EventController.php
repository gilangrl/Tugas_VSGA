<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $data = Event::all();
        return view('event.index', compact('data'));
    }

    public function tambah()
    {
        return view('event.tambah');
    }

    public function add(Request $request)
    {
        $data = new Event([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'tanggal_event' => $request->tanggal_event,
            'gambar' => $request->gambar,
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move('foto_event/', $gambarName);
                        
            $data->gambar = $gambarName;
        }

        $data->save();
        // dd($data);
        return redirect()->route('event');
    }

    public function edit($id)
    {
        $data = Event::find($id);
        return view('event.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Event::find($id);

        // Set nilai-nilai baru
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->lokasi = $request->lokasi;
        $data->tanggal_event = $request->tanggal_event;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move('foto_event/', $gambarName);

            $data->gambar = $gambarName;
        }

        $data->save();

        // dd($data);
        return redirect()->route('event');
    }

    public function delete($id)
    {
        $data = Event::find($id);
        $data->delete();

        // dd($data);
        return redirect()->route('event');
    }
}
