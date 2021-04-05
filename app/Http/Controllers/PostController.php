<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get();
        //where('content', 'LIKE', '%%')
        return view("post/index",compact('posts'));
    }
    public function store(Request $request){
        $content = $request->post;
        $post = new Post();
        $post->content = $content;
        $post->save();
        
        return redirect('/post');
    }
}