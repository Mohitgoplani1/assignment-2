<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(3);
        
        return view('admin.posts.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = $request->all();
        $post['user_id'] = Auth::user()->id;
        $post['image_id'] = 0;
        Post::create($post);
        Session::flash('admin_flash', 'Post created successfully.');
        return redirect(route('admin-posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        if( $post == null) {
            Session::flash('admin_flash', 'Post does not exist.');
            return redirect(route('admin-posts'));
        }
        $categories = Category::all();
        return view('admin.posts.edit', compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $input = $request->all();
        $post->update($input);
        Session::flash('admin_flash', 'Post edited successfully.');
        return redirect(route('admin-posts'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
