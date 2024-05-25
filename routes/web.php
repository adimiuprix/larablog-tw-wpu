<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    # Mengirim data 'title' ke home untuk di tampilkan
    return view('home', ['title' => 'Home page']);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{post:slug}', function(Post $post){
    // $post = Post::find($id);

    return view('blog_detail', ['title' => 'Blog detail', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Adi miuprix', 'title' => 'About page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact page']);
});
