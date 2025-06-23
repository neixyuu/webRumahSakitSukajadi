<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();
        return view('admin.dashboarddokter', compact('dokters'));
    }

    public function create()
    {
        return view('admin.dokter.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'spesialisasi' => 'required',
            'hari' => 'required',
            'jam' =>'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'nullable'
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('dokter-photos', 'public');
            $validated['foto'] = $fotoPath;
        }

        Dokter::create($validated);

        return redirect()->route('admin.dashboarddokter')->with('success', 'Doctor added successfully');
    }

    public function show(Dokter $dokter)
    {
        return view('admin.dokter.show', compact('dokter'));
    }

    public function edit(Dokter $dokter)
    {
        return view('admin.dokter.edit', compact('dokter'));
    }

    public function update(Request $request, Dokter $dokter)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'spesialisasi' => 'required',
            'hari' => 'required',
            'jam' =>'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'nullable'
        ]);

        if ($request->hasFile('foto')) {
            if ($dokter->foto) {
                Storage::disk('public')->delete($dokter->foto);
            }
            $fotoPath = $request->file('foto')->store('dokter-photos', 'public');
            $validated['foto'] = $fotoPath;
        }

        $dokter->update($validated);

        return redirect()->route('admin.dashboarddokter')->with('success', 'Doctor updated successfully');
    }

    public function destroy(Dokter $dokter)
    {
        if ($dokter->foto) {
            Storage::disk('public')->delete($dokter->foto);
        }
        
        $dokter->delete();

        return redirect()->route('admin.dashboarddokter')->with('success', 'Doctor deleted successfully');
    }

    public function listDokter()
    {
        $dokters = Dokter::all();
        return view('dokter.dokter', compact('dokters'));
    }
}
