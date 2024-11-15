<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view ('post.index', ['post' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'body' => 'required',
        ]);

        $input = $request->all();

        $posts = Post::create($input);

        return back () -> with('success', 'Data berhasil dikirimkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $post)
    {
        $post = Post::findOrFail($post);

        return view('post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $post)
    {
        $post = Post::findOrFail($post);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    
     public function destroy($id)
     {
         $post = Post::findOrFail($id);
         $post->delete();
     
         return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
     }

}