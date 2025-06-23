<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback.kritiksaran');
    }

    public function store(Request $request)
    {
        $feedback = Feedback::create([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'message' => $request->message,
            'status' => 'Belum Dibaca'
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil terkirim. Terima kasih atas masukan Anda!');
    }

    public function adminIndex()
    {
        $feedback = Feedback::orderBy('created_at', 'desc')->get();
        return view('admin.feedback.index', compact('feedback'));
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('admin.feedback.index')->with('success', 'Feedback berhasil dihapus');
    }
}
