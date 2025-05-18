<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('admin.feedback.feedback', [
            'feedbacks' => Feedback::latest()->get()
        ]);
    }

    public function destroy(Feedback $feedback)
    {
        Feedback::destroy($feedback->id);
        return redirect('/admin/feedback')->with('success', 'Feedback has been deleted!');
    }
}