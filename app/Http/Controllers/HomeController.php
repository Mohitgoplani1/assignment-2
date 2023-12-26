<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->take(9)->get();
        return view('home', compact('posts'));

    }
    public function show($id) {
        $post = Post::find($id);
        $post->content = Str::markdown($post->content);
        return view('post-details', compact('post'));
    }
}
