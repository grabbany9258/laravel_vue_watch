<header id="header">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Logo -->
        <a class="logo" href="#"><img src="/frontend/images/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
          aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"><i class="icofont-navigation-menu"></i></span>
        </button>
        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="/" data-scroll-nav="0">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="2">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="3">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cart">Basket</a>
              <badge-icon :basket-count="{{ Auth::user()->basket->sum('qty') ?? '' }}" />

            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ 'login' }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="5">Testimonial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="6">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
