<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <i class="fas fa-globe-africa"></i> Wanderlust
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Articoli</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @guest
                Accedi
              @endguest
              @auth
                {{Auth::user()->name}}
              @endauth
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @guest
                    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                    <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                @endguest
                @auth
                    <li><a class="dropdown-item" href="#">I miei articoli</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                @endauth
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>