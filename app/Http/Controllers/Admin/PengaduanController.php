<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('admin.dashboardpengaduan', [
            'pengaduan' => Pengaduan::latest()->get()
        ]);
    }

    public function updateStatus(Request $request, Pengaduan $pengaduan)
    {
        $pengaduan->update([
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Status pengaduan berhasil diupdate!');
    }

    public function destroy(Pengaduan $pengaduan)
    {
        $pengaduan->delete();
        return redirect()->back()->with('success', 'Pengaduan berhasil dihapus!');
    }

    public function show(Pengaduan $pengaduan)
    {
        return view('admin.pengaduan.show', compact('pengaduan'));
    }
}