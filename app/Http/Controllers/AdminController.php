<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Feedback;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {  // Changed from Auth::guard('admin')->attempt
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function dashboardKritikSaran()
    {
        $feedback = Feedback::orderBy('created_at', 'desc')->get();
        return view('admin.dashboardkritiksaran', compact('feedback'));
    }

    public function destroyKritikSaran(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('admin.dashboardkritiksaran')->with('success', 'Feedback deleted successfully');
    }
}
