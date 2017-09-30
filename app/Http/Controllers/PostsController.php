<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
  public function __construct(){
    $this->middleware('auth')->except(['search', 'show']);
  }

  public function create(){
    return view('posts/create');
  }

  public function store(){
    $this->validate(request(), [
      'title' => 'required|unique:posts|max:64',
      'body' => 'required|min:16'
    ]);
    Post::create([
      'title' => request('title'),
      'body' => request('body'),
      'user_id' => auth()->id()
    ]);
    return redirect('/posts/search');
  }

  public function show($id){
    $post = Post::find($id);
    return view('posts/show', compact('post'));
  }

  public function search(){
    $posts = Post::all();
    return view('posts/search', compact('posts'));
  }
}
