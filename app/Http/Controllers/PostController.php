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
        #Generating random num and search for it in DB, if it doesnt exist => insert into DB
        $id = rand(999,10000);
        $post = Post::where('id', $id)->first();
        if($post === null) {
            $data=array('id'=>$id,'title'=>$title,"content"=>$content);
            DB::table('posts')->insert($data);
        }  
    }

    public function deletePostById() {
        $id = request("id");
        $post = Post::where('id', $id)->delete();
    }
}
