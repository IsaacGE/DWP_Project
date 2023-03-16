<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function index()
    {
        return view('SignIn');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|min:5',
            'password' => 'required|min:8'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('message', 'Invalid username or password.');
        }
        return redirect()->route('post.index');
    }


    
    public function Logout(Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}