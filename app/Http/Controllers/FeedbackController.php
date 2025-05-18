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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Feedback::create($request->all());

        return redirect()->back()->with('success', 'Terima kasih atas feedback Anda!');
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
