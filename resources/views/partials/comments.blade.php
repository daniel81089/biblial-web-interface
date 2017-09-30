<div class="col-12">
  <hr>
  @if(count($errors))
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="/posts/{{$post->id}}/comments" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <textarea name="comment" rows="2" class="form-control" placeholder="What's on your mind?"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Comment</button>
    </div>
  </form>
  <hr>
  <div class="list-group">
    @foreach($post->comments()->orderBy('id', 'desc')->get() as $comment)
    <div class="list-group-item">
      {{$comment->comment}}
      <br>
      <small>Last Updated: {{$comment->updated_at->diffForHumans()}}</small>
    </div>
    @endforeach
  </div>
</div>
