@extends('partials.master')

@section('content')
<div class="row">
  <div class="widget col-12">
    <h1>Register</h1>
    <hr>
    @include('partials/errors')
    <div class="col-6 p-0">
      <form action="{{route('postRegister')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
          Username
          <input type="text" class="form-control" name="name" value="{{old('name')}}">
        </div>
        <div class="form-group">
          Email
          <input type="email" class="form-control" name="email" value="{{old('email')}}">
        </div>
        <div class="form-group">
          Password
          <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
          Confirm Password
          <input type="password" class="form-control" name="password_confirmation">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
