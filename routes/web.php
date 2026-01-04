<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About Page", "name" => "Rafly Chnadra Winata", "email" => "rafly@gmail.com"]);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Blog Page", "posts" => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // Gunakan Arr::first (bukan firts) dan variabel $posts (bukan $post)
    // $post = Post::find($slug);
    return view ('post', ['title' => "Single Post", 'post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    return view ('posts', ['title' => "Authors By ". $user->name, 'posts' => $user->posts]);
});


Route::get('/contact', function () {
    return view('contact', ["title" => "Contact Page"]);
});
