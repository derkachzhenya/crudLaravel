<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
   
    public function index()
    {
        $posts=Post::paginate(10);
        return view('post.index', compact('posts'));
    }

    
    public function create()
    {
        return view('post.create');
    }

  
    public function store(StorePostRequest $request)
    {
        $data=$request->validated();
        Post::firstOrCreate($data);
        return redirect()->route('posts.index');

    }

   
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

   
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

   
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data=$request->validated();
        $post->update($data);
        return redirect()->route('posts.index', compact('post'));
    }

   
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index', compact('post'));

    }
}
