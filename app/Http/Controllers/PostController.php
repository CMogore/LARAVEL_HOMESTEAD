<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    // Controllers: Handle requests and interact with the database

    public function index()
    {
        // Requests and Responses: Retrieve data from the database and return a view with the data
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        // Requests and Responses: Retrieve data from the database and return a view with the data
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
}
