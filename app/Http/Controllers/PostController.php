<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil postingan terbaru
        $postsQuery = Post::latest();
        
        // Menggunakan lazy loading untuk menghindari N+1 problem
        $posts = $postsQuery->with(['author', 'category'])->get();
    
        // Mengembalikan view dengan data yang diperlukan
        return view('blog', [
            'title' => 'Blog Page',
            'posts' => Post::filter()->latest()->get()
        ]);
    }
    
    public function post(){
        return view('post', ['title' => 'Isi Post']);
    }
}
