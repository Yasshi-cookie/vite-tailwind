<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index(PostRequest $request)
    {
        dd(Post::all());
        return view('posts.index');
    }
}
