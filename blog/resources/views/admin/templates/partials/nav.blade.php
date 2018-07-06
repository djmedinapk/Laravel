<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a href="#menu-toggle" class="btn btn-dark" id="menu-toggle"><i class="fas fa-bars"></i></a>
  <a class="navbar-brand" href="#">@yield('title','index') | ADPanel</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      @yield('buttons')
    </ul>
  </div>
</nav>