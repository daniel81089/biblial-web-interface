@extends('partials/master')

@section('content')
<div class="home row">
  <div class="col-12 text-white">
    <h1>Hosting the World's encyclopedia.</h1>
    <hr>
    <h3><i>We all have an innate desire to improve ourselves, to learn, and to collect knowledge.</i></h3>
    <p>Printable | Digital | Free | Open | Downloadable</p>
  </div>
  <div class="col-12">
    <h3>What else could we possible want from an encylopedia?</h3>
    <p>Most open-source software today can be downloaded, and modified for personal use. However, until now, most Wikis don't allow this.</p>
  </div>
  <div class="col-12 text-white">
    <h3>Biblial.com offers much more!</h3>
    @include('partials/siteFeatures')
  </div>
</div>
@endsection
