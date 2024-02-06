<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
        // validate incoming request data
        $this->validate(request(), [
            'new_comment' => 'required|min:1|max:255'
        ]);

        // store comment
        $post->comments()->create([
            'user_id'   => auth()->id(),
            'body'      => request()->new_comment
        ]);

        // redirect to the previous URL
        return redirect()->back();
    }
}