<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
  public function store(Post $post){
    $this->validate(request(), [
      'comment' => 'required|max:140'
    ]);
    $post->addComment(request('comment'));
    return redirect('/posts/' . $post->id);
  }
}
