<?php

namespace App\Http\Controllers;

// Models
use App\DiscPost;
use App\Post;

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

        return back()->with("success", "Your post has been submitted successfully");
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
        //
        $this->authorize('update', $discpost);

        return view('discpost.edit', compact('post', 'discpost'));
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
        //
        $this->authorize('update', $discpost);

        $discpost->update($request->validate([

            'body' => 'required',

        ]));

        return redirect()->route('posts.show', $post->slug)->with('success', 'Your discussion post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, DiscPost $discpost)
    {
        //Authorizes the user
        $this->authorize('delete', $discpost);

        //Deletes the discpost
        $discpost->delete();

        //Refreshes the page
        return back()->with('success', "Your discussion post has been removed");
    }
}
