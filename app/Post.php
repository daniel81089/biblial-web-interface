<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //choosing to be explicit every time this model is updated
  protected $guarded = [];

  public function comments(){
    return $this->hasMany(Comment::class);
  }

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function addComment($comment){
    $this->comments()->create(compact('comment'));
  }
}
