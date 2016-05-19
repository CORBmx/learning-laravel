<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.form');
    }

    public function store(Request $request)
    {
        $user = User::find(1);

        $post = Post::create([
            'content' => $request->content,
            'user_id' => $user->id,
        ]);

        return redirect('/posts');
    }
}
