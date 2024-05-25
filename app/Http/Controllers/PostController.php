<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('blog', ['title' => 'Blog page', 'posts' => $posts]);
    }

    public function post(){
        return view('post', ['title' => 'Isi Post']);
    }
}
