<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model // secara default terhubung ke tabel posts
{
    // protected $table = 'blog_posts';
    protected $fillable = ['title', 'body', 'author', 'slug'];
}
