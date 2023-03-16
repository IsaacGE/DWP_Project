<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('Post.Create');
    }

    public function dashboard(){
        return view('Post.Dashboard');
    }
}
