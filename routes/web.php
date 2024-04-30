<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    # Mengirim data 'title' ke home untuk di tampilkan
    return view('home', ['title' => 'Home page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Adi miuprix', 'title' => 'About page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact page']);
});
