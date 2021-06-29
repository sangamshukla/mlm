<header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">

          <a class="navbar-brand" href="index.html">
            <img src="{{ asset('assets/images/feedwell.png') }}" style="width: 110px; height: 70px;"></a>


        <!-- if logo is image enable this
          <a class="navbar-brand" href="#index.html">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @@about__active">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item @@services__active">
              <a class="nav-link" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item @@services__active">
              <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            <li class="nav-item @@services__active">
              <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
            </li>
            <li class="nav-item @@services__active">
              <a class="nav-link" href="{{ route('bod') }}">BOD</a>
            </li>
            <li class="nav-item @@services__active">
              <a class="nav-link" href="#">CPlan</a>
            </li>
             <li class="nav-item dropdown @@pages__active">
              <a class="nav-link dropdown-toggle" href="{{ route('register') }}" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Account <span class="fa fa-angle-down"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item @@b__active" href="{{ route('register') }}">Register</a>
                <a class="dropdown-item @@bs__active" href="{{ route('login') }}">Login</a>

              </div>
            </li>
          </ul>
          </div>



          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
            <nav class="navigation">
              <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                  <input type="checkbox" id="checkbox">
                  <div class="mode-container py-1">
                    <i class="gg-sun"></i>
                    <i class="gg-moon"></i>
                  </div>
                </label>
              </div>
            </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>

    </div>
</header>
