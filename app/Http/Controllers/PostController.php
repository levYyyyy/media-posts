<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPosts() {
        $posts = Post::all();

        return view('posts', compact('posts'));
    }

    public function getPostById() {
        $id = request("id");
        $post = Post::where('id', $id)->first();      
        
        return view('post', compact('post'));
    }
}
