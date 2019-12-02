<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name: If you want to change the name of the table name
    protected $table = 'posts';

    // Timestamps: If you want to toggle timestamps
    public $timestamps = true;

    // Relationship stating a single post belongs to one user
    // public function user() {

    //     return $this->belongsTo('App\User');

    // }
}
