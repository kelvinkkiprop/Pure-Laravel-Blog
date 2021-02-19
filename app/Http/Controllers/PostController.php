<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Add
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);

        return view('posts.all-posts')->with([
            'posts' => $posts,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //To create post view
        return view('posts.create-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Save post to DB
        $this -> validate($request, [
            'title'    =>      'required|string',
            'description'    =>      'required|string',
         ]);

         $post = new Post;
         $post->title = $request->input('title');
         $post->description = $request->input('description');
         $post->save();

         return redirect()->back()->with('success', 'Post created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //To edit post
        $post = Post::find($id);
        return view('posts.edit-post')->with([
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Edit post
        $this -> validate($request, [
            'title'    =>      'required|string',
            'description'    =>      'required|string',
         ]);

         $post = Post::find($id);
         $post->title = $request->input('title');
         $post->description = $request->input('description');
         $post->save();

         return redirect()->back()->with('info', 'Post updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete post
         $post = Post::find($id);
         $post->delete();

         return redirect()->back()->with('danger', 'Post removed successfully!');
    }
}
