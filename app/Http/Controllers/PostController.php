<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
  public function getHome()
  {
    $posts = Post::all();
    return view('home', ['posts'=> $posts]);
  }

  public function postCreatePost( Request $request)
  {
    $this->validate($request, [
      'body' => 'required|min:3|max:240'
    ]);

    $post = new Post();
    $post->body = $request['body'];
    $message = 'There was an error';

     if ($request->user()->posts()->save($post)){
       $message = 'Success Boi';
     }

    return redirect()->route('home')->with([
      'message' => $message
      ]);
  }
}
