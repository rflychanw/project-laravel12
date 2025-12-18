<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                "id" => 1,
                "title" => "Judul Artikel 1",
                "slug" => "judul-artikel-1",
                "author" => "Rafly Chandra Winata",
                "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae incidunt totam similique, 
                        voluptates nulla consequatur ex voluptas. Aperiam nulla, necessitatibus et delectus dolor 
                        quam vitae ipsa, accusantium eut soluta, laboriosam quis?"
            ],
            [
                "id" => 2,
                "title" => "Judul Artikel 2",
                "slug" => "judul-artikel-2",
                "author" => "Rafly Chandra",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, 
                       quos vel! Commodi porro accusantium maiores aliquam optio. 
                       Quia culpa architecto, quis expedita vero dolore pariatur error officiis earum 
                       molestias excepturi!"
            ]
        ];
    }

    public static function find($slug)
    {
        //     return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // }); ==> callback

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }


        return $post;
    }
}
