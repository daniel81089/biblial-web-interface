<div class="article">
  <h1 class="article-title"><a href="{{route('getPostsShow', ['id' => $post->id])}}">{{$post->title}}</a></h1>
  <p class="article-meta">Created: {{$post->created_at}} by {{$post->user->name}}</p>
  @if($post->created_at != $post->updated_at)
  <p class="article-meta">Last Updated: {{$post->updated_at}}</p>
  @endif
  <p class="article-body">{{$post->body}}</p>
</div>
