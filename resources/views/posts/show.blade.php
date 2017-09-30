@extends('partials/master')

@section('content')
<div class="row">
  <div class="widget col-12">
    @include('partials/article')
    @include('partials/comments')
  </div>
</div>
@endsection
