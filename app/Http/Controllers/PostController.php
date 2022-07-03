<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function getCreatePostPage() {
        return view('create_post');
    }

    public function createPost(Request $request) {
        $title = $request->input("title");
        $content = $request->input("content");
        $data=array('title'=>$title,"content"=>$content);
        DB::table('posts')->insert($data);
    }
}
