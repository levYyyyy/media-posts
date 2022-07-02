<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPosts() {
        foreach (Post::all() as $post) {
            dump($post->title);
            dump($post->content);
            dump($post->likes);
        }
        dd("end");
    }

    public function getPostById() {
        $id = request("id");
        $post = Post::where('id', $id)->first();      
        dump($post->title);
        dump($post->content);
        dump($post->likes);
    }
}
