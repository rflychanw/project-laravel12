<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactoryFactory> */
    use HasFactory;
    protected $fillable = ['title', 'body', 'author', 'slug'];


    // fungsi relasi untuk mengetahui author di dalam post dengan factory
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
}
