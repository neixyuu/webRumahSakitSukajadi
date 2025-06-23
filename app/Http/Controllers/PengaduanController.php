<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('feedback.pengaduan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'kategori' => 'required',
            'lokasi' => 'required',
            'tanggal_kejadian' => 'required|date',
            'message' => 'required'
        ]);

        Pengaduan::create($request->all());

        return redirect()->back()->with('success', 'Pengaduan berhasil dikirim');
    }

    public function dashboardPengaduan()
    {
        $pengaduan = Pengaduan::latest()->get();
        return view('admin.dashboardpengaduan', compact('pengaduan'));
    }

    public function destroy(Pengaduan $pengaduan)
    {
        $pengaduan->delete();
        return redirect()->route('admin.dashboardpengaduan')
            ->with('success', 'Pengaduan berhasil dihapus');
    }
}