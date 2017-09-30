@extends('partials/master')

@section('content')
<div class="row">
  <div class="widget col-md-9">
    <h1>What is Biblial.com?</h1>
    <hr>
    <p>Biblial.com offers the following:</p>
    @include('partials/siteFeatures')
  </div>
  @include('partials/sidebar')
</div>
@endsection
