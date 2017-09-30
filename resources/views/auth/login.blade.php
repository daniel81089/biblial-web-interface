@extends('partials.master')

@section('content')
<div class="row">
  <div class="widget col-12">
    <h1>Login</h1>
    <hr>
    @include('partials/errors')
    <div class="col-6 p-0">
      <form action="{{route('postLogin')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          Email
          <input class="form-control" id="email" type="email" name="email" value="{{old('email')}}">
        </div>
        <div class="form-group">
          Password
          <input class="form-control" id="password" type="password" name="password">
        </div>
        <div class="form-group">
          <p><input type="checkbox" name="remember" {{old('remember')?'checked':''}}> Remember Me</p>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="form-group">
          <p><a href="#">Forgot Your Password?</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
