<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index', ['posts' => Post::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Admin only

        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Admin only

        // Saving the post after validation 
        // Might try to do this with livewire, if I like it haha

        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required|max:255',
        ]);

        // This isn't working. 
        // $this->validatePost();

        // dd(request());

        Post::create([
            'user_id' => Auth::id(), 
            'title' => $attributes['title'],
            'body' => $attributes['body'],
        ]);
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $previous = Post::where('id', '<', $post->id)->first();
        $next = Post::where('id', '>', $post->id)->first();

        return view('blog.view', ['post' => $post])->with('previous', $previous)->with('next', $next);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // Admin only
        return view('blog.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($this->validatePost());
        return redirect($post->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }


    protected function validatePost(){
        // Validate Admin only here too

        return request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
    }
}
