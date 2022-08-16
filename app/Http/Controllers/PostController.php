<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function home()
    {
        $posts = Post::with(['user'])->get();
        return view('home', ['posts' => $posts->toArray()]);
    }

    public function createForm()
    {
        return view('post_form');
    }

    public function save(Request $request)
    {
        \Validator::validate($request->all(), [
          'id' => 'nullable|exists:posts,_id',
          'title' => 'required|min:1',
          'content' => 'required|min:1'
        ]);

        $user = \Auth::user();
        $id = $request->get('id');

        if ($id) {
          $post = Post::query()->find($id);
        } else {
          $post = new Post();
          $post->user()->associate($user);
        }

        $post->title = $request->get('title');
        $post->content = $request->get('content');

        $post->save();

        return redirect()->route('home');
    }

    public function editForm(Request $request, $id)
    {
        $post = Post::query()->find($id);

        if (!$post) {
          return redirect()->route('home');
        }

        return view('post_form', ['post' => $post]);
    }
}
