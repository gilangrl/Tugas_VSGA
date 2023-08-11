<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $data = Gallery::all();
        return view('gallery.index', compact('data'));
    }

    public function tambah()
    {
        return view('gallery.tambah');
    }

    public function add(Request $request)
    {
        $data = Gallery::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
        ]);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move('gallery_foto/', $gambarName);
                        
            $data->gambar = $gambarName;
        }

        $data->save();
        // dd($data);
        return redirect()->route('gallery');
    }

    public function edit($id)
    {
        $data = Gallery::find($id);
        return view('gallery.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Gallery::find($id);
        $data->update([
            'deskripsi' => $request->deskripsi,
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move('gallery_foto/', $gambarName);

            $data->gambar = $gambarName;
        }

        $data->save();
        // dd($data);
        return redirect()->route('gallery');

    }

    public function delete($id)
    {
        $data = Gallery::find($id);
        $data->delete();

        // dd($data);
        return redirect()->route('gallery');
    }

    public function indexKlien()
    {
        $data = Gallery::all();
        return view('klienKami.index', compact('data'));
    }

}
