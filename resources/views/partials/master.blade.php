<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/app.css">
  <title>Biblial Base</title>
</head>
<body>
  <header>
    @include('partials/header')
  </header>
  <main>
    <div class="container-fluid">
      @yield('content')
    </div>
  </main>
  <footer>
    <div class="container-fluid">
      @include('partials/footer')
    </div>
  </footer>
  <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
