<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name to be used
    protected $table = 'posts';

    // columns to be allowed in mass-assingment 
    protected $fillable = ['user_id', 'title', 'body'];

    /* Relations */

    // One to many inverse relationship with User model
    public function owner() {
    	return $this->belongsTo(User::class, 'user_id');
    }

    // One to Many relationship with Comment model
    public function comments()
    {
    	return $this->hasMany(Comment::class, 'post_id');
    }

    /**
     * get show post route
     *
     * @return string
     */
    public function path()
    {
        return "/posts/{$this->id}";
    }
}
