<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
   public function index()
   {
       $posts = Post::all();
       return response()->json($posts);
   }
   public function store(Request $request)
{
    $post = new Post;
    $post->title = $request->title;
    $post->body = $request->content;
    $post->save();

    return response()->json($post);
}
}


?>