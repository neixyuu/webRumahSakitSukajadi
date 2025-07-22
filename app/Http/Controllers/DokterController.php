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
            'deskripsi' => 'nullable'
        ]);

        // Proses foto yang sudah di-crop
        if ($request->has('cropped_foto') && !empty($request->cropped_foto)) {
            // Decode base64 image
            $image_parts = explode(";", $request->cropped_foto);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode(explode(",", $request->cropped_foto)[1]);
            
            // Generate unique filename
            $filename = 'dokter_' . time() . '.' . $image_type;
            $filepath = 'dokter-photos/' . $filename;
            
            // Save image to storage
            Storage::disk('public')->put($filepath, $image_base64);
            $validated['foto'] = $filepath;
        } elseif ($request->hasFile('foto')) {
            // Fallback to original file upload if cropped image is not available
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
            'deskripsi' => 'nullable'
        ]);

        // Proses foto yang sudah di-crop
        if ($request->has('cropped_foto') && !empty($request->cropped_foto)) {
            // Hapus foto lama jika ada
            if ($dokter->foto) {
                Storage::disk('public')->delete($dokter->foto);
            }
            
            // Decode base64 image
            $image_parts = explode(";", $request->cropped_foto);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode(explode(",", $request->cropped_foto)[1]);
            
            // Generate unique filename
            $filename = 'dokter_' . time() . '.' . $image_type;
            $filepath = 'dokter-photos/' . $filename;
            
            // Save image to storage
            Storage::disk('public')->put($filepath, $image_base64);
            $validated['foto'] = $filepath;
        } elseif ($request->hasFile('foto')) {
            // Fallback to original file upload if cropped image is not available
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
