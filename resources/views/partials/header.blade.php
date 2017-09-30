<nav>
  <div class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="navbar-brand">
      Biblial Base
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="navbar-nav mr-auto">
        <a class="nav-item nav-link" href="{{route('getIndex')}}">Home</a>
        <a class="nav-item nav-link" href="{{route('getAbout')}}">About</a>
        <a class="nav-item nav-link" href="{{route('getPostsCreate')}}">Create</a>
        <a class="nav-item nav-link" href="{{route('getPostsSearch')}}">Search</a>
        <!--<a class="nav-item nav-link" href="{{route('getBrowser')}}">Browser</a>-->
      </div>
      <div class="navbar-nav ml-auto">
      @if(Auth::check())
        <a class="nav-item nav-link" href="#}">Welcome, {{Auth::user()->name}}!</a>
      @else
        <a class="nav-item nav-link" href="{{route('getRegister')}}">Register</a>
        <a class="nav-item nav-link" href="{{route('login')}}">Login</a>
      @endif
      </div>
    </div>
  </div>
</nav>
