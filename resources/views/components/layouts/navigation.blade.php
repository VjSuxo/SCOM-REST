
@vite(['resources/css/estilo_inicio.css'])
<nav class="navbar navbar-expand-lg bg-dark">

    <div class="container-fluid ">
        <a class="navbar-brand" href="#">
            <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
          </a>
        <a class="nav-link" href="#">
           SCOM-REST
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href=" {{ route('usuario.menu')}} ">Menu</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Nuestros Platos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Sopas</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Plato Fuerte/Segundo</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Ensalada</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Bebidas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Con Alcohol</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sin Alcohol</a></li>

              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Contactanos</a>
            </li>

            <li class="nav-item">
                @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}" class="nav-link">Cuenta</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
            </li>

          </ul>

      </div>
    </div>

  </nav>
