<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    # table name to be used by model
    protected $table = 'comments';

    # columns to be allowed in mass-assingment
    protected $fillable = ['user_id', 'post_id', 'body'];

    /** Relations */

    # One-to-Many inverse relation with User model.
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    # One-to-Many inverse relation with Post model.
    public function post()
    {
    	return $this->belongsTo(Post::class, 'post_id');
    }

    # One-to-Many relation with Reply model.
    public function replies()
    {
    	return $this->hasMany(Reply::class, 'comment_id');
    }
}