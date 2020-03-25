<?php

namespace App\Http\Controllers;

// Models
use App\Post;
use App\DiscPost;

use Illuminate\Http\Request;

class DiscPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post, Request $request)
    {
        //
        $post->discposts()->create(
            
            //Checks to see if question is valid
            $request->validate([

            'body' => 'required'

            ])

            +
            
            ['user_id' => \Auth::id()]);

        return back()->with("success", "Your discussion post has been successfully submitted!");
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
    public function edit(Post $post, DiscPost $discpost)
    {
        // Check for correct user
        if(auth()->user()->id !== $discpost->user_id){

            // If user is not authorized to edit the post redirect them back to viewing posts
            return redirect('/posts')->with('error', 'Unauthorized Page');

        }

        return view('discposts.edit', compact('post', 'discpost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post, DiscPost $discpost)
    {
        // Check for correct user
        if(auth()->user()->id !== $discpost->user_id){

            // If user is not authorized to edit the post redirect them back to viewing posts
            return redirect('/posts')->with('error', 'Unauthorized Page');

        }

        $discpost->update($request->validate([

            'body' => 'required',

        ]));

        return redirect('/posts')->with('success', 'Your discussion post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, DiscPost $discpost)
    {
        // Check for correct user
        if(auth()->user()->id !== $discpost->user_id){

            // If user is not authorized to edit the post redirect them back to viewing posts
            return redirect('/posts')->with('error', 'Unauthorized Page');

        }

        //Deletes the discpost
        $discpost->delete();

        //Refreshes the page
        return back()->with('success', "Your discussion post has been removed");
    }
}
