<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','desc')->take(4)->get();
    return view('posts.index',compact('posts'));
    }
    public function show (Post $post, string $title){
        return view('posts.show', compact('post'));
    }
}