<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
  public function getHome()
  {
    $posts = Post::orderBy('created_at', 'desc')-> get();
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



  public function getDeletePost($post_id)
  {
    $post = Post::where('id', $post_id)->first();
    if(Auth::user() != $post->user){
      return redirect()->back();
    }
    $post->delete();
    return redirect()->route('home')->with(['message' => 'Te fuiste DE-LE-TEA-DO']);
  }


  public function postEditPost(Request $request)
  {
    $this->validate($request, [
      'body' => 'required'
    ]);
   $post = Post::find($request['postId']);
   if(Auth::user() != $post->user){
     return redirect()->back();
   }
   $post->body = $request['body'];
   $post->update();
   return response()->json(['new_body' => $post->body],200);
 }





}
