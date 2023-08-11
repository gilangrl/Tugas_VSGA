<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{   
    public function index()
    {
        $data = Artikel::all();
        return view('artikel.index', compact('data'));
    }

    public function tambah()
    {
        return view('artikel.tambah');
    }

    public function add(Request $request)
    {
        $data = Artikel::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal_publikasi' => $request->tanggal_publikasi,
        ]);

        // dd($data);
        return redirect()->route('artikel');
    }

    public function edit($id)
    {
        $data = Artikel::find($id);

        return view('artikel.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Artikel::find($id);
        $data->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal_publikasi' => $request->tanggal_publikasi,
        ]);

        // dd($data);
        return redirect()->route('artikel');
    }

    public function delete($id)
    {
        $data = Artikel::find($id);
        $data->delete();

        // dd($data);
        return redirect()->route('artikel');
    }

}
