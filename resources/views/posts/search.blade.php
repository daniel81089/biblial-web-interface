@extends('partials/master')

@section('content')
<div class="row">
  <div class="widget col-12">
    <h1>Search for knowledge.</h1>
    <hr>
  </div>
  @foreach($posts as $post)
  <div class="widget col-12">
    @include('partials/article')
  </div>
  @endforeach
</div>
@endsection
