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
    
    public function edit($id){
        $posts = Post::where('id','=',$id)->first();
        return view("post/edit",compact('post'));
    }
    
    public function update(Request $request,$id){
        $posts = Post::where('id','=',$id)->first();
        $post->content = $request ->content;
        $post->save();
        return redirect('/post');
    }

    public function delete($id){
        $post = Post::where('id','=',$id)->first();
        $post->delete();

        return redirect('/post');    
    }

}
