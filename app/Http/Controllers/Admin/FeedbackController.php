<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('admin.adminfeedback', [
            'feedbacks' => Feedback::latest()->get()
        ]);
    }

    public function show(Feedback $feedback)
    {
        return view('admin.kritiksaran.show', compact('feedback'));
    }

    public function destroy(Feedback $feedback)
    {
        Feedback::destroy($feedback->id);
        return redirect('/admin/adminfeedback')->with('success', 'Feedback has been deleted!');
    }
}