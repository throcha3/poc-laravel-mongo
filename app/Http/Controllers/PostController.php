<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function home() {
        $posts = Post::with(['user'])->get();
        return view('home', ['posts' => $posts->toArray()]);
    }
}
