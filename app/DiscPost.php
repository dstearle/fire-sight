<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscPost extends Model
{
    
    public $fillable = ['body', 'user_id'];
    
    // Relation to post
    public function post() {

        return $this->belongsTo(Post::class);
    }

    // Relation to user
    public function user() {

        return $this->belongsTo(User::class);
    }
}
