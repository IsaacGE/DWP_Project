<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Post.Create');
    }

    public function dashboard()
    {
        return view('Post.Dashboard');
    }

    public function Create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:155',
            'text' => 'required|max:500',
            'imagePath' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'text' => $request->title,
            'imagePath' => $request->imagePath,
            'user_id' => auth()->User()->id
        ]);

        return redirect()->route('Post.Dashboard', auth()->user()->username);
    }
}