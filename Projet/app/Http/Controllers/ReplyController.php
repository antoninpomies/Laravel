<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Comment $comment)
    {
        // validate incoming data with validation rules
        $this->validate(request(), [
            'new_reply' => 'required|min:1|max:255'
        ]);

        /** 
        *    store the new reply through relationship, 
        *    through this way you don't have to 
        *    provide `comment_id` field inside create() method
        */
        $comment->replies()->create([
            'user_id' => auth()->id(),
            'body' => request()->new_reply
        ]);

        // redirect to the previous URL
        return redirect()->back();
    }
}