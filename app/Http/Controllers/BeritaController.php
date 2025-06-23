<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::orderBy('created_at', 'desc')->get();
        return view('admin.dashboardberita', compact('beritas'));
    }

    public function show(Berita $berita)
    {
        return view('admin.berita.show', compact('berita'));
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'isi' => 'required'
        ]);

        $berita->update($validatedData);

        return redirect()->route('admin.dashboardberita')
            ->with('success', 'Article updated successfully');
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('admin.dashboardberita')->with('success', 'Berita berhasil dihapus');
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('berita', 'public');
            $validated['gambar'] = $imagePath;
        }
    
        Berita::create($validated);
        return redirect()->route('admin.dashboardberita')->with('success', 'Berita berhasil ditambahkan');
    }

    public function listBerita()
    {
        $beritas = Berita::orderBy('created_at', 'desc')->get();
        return view('berita.berita', compact('beritas'));
    }

    public function showPublic(Berita $berita)
    {
        return view('berita.show', compact('berita'));
    }
    
}
