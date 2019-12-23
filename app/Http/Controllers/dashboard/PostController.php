<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostPost;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard.post.index', compact('posts'));
    }

    public function create()
    {
        return view('dashboard.post.create',['post' => new Post()]);
    }

    public function store(StorePostPost $request)
    {
        Post::create($request->validated());
        return back()->with('status', 'Post creado con exito!');
    }

    public function show(Post $post)
    {
        return view('dashboard.post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('dashboard.post.edit', compact('post'));
    }

    public function update(StorePostPost $request, Post $post)
    {
        $post->update($request->validated());
        return back()->with('status', 'Post actualizado con exito!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('status', 'Post elimnado con exito!');
    }
}
