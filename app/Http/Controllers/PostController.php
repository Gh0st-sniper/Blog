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

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $incoming = $request->validate([

            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::create($incoming);

        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //

        $post = Post::findorFail($id);

        return view('posts.show', ['post' => $post ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $post = Post::findorFail($id);

        return view('posts.edit', ['post' => $post ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //

        $incoming = $request->validate([

            'title' => 'required',
            'body' => 'required',


        ]);

        $post->update($incoming);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

        $post = Post::findorFail($id);
        $post->delete();

        return redirect("/")->with('success', 'Post successfully deleted');
    }
}
