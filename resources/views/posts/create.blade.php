@extends('partials/master')

@section('content')
<div class="row">
  <div class="widget col-md-9">
    <h1>Share knowledge.</h1>
    <hr>
    @include('partials/errors')
    <form action="{{route('postPosts')}}" method="post">
      {{csrf_field() }}
      <div class="form-group">
        <label>Title</label>
        <input name="title" type="text" class="form-control" placeholder="Article Title">
      </div>
      <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control" rows="7" placeholder="Article Body"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
    </form>
  </div>
  @include('partials/sidebar')
</div>
@endsection
