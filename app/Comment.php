<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  //choosing to be explicit every time this model is updated
  protected $guarded = [];

  public function post(){
    return $this->belongsTo(Post::class);
  }

  public function user(){
    return $this->belongsTo(User::class);
  }
}
