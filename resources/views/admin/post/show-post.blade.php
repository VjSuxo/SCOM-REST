<x-empleado.app title='Usuario'>
    @vite(['resources/css/estilo_registroAdm.css','resources/js/registroAdm.js'])
    <nav class="navbar-expand-lg navbar-dark bg-dark">
    <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('home.admin') }}" >Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('admin.usuario.show-user') }}" >Usuarios</a>
              </li>
            <li class="nav-item">
              <a class="nav-link  " href="{{ route('admin.usuario.crear-user') }}" >Crear Usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('admin.post.show-post') }}" >Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.post.agregar-post') }}" >Crear Posts</a>
              </li>
          </ul>

    </nav>

    <div class="container  mt-3 border border-dark rounded  border-3">


         <form class="row g-3 mt-3 mb-3">
            <div class="col-auto">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('admin.post.postInicio') }}" target="frame">Inicio</a></li>
                      <li><a class="dropdown-item" href="#">Menu</a></li>
                      <li><a class="dropdown-item" href="#">Preguntas Frecuentes</a></li>
                      <li><a class="dropdown-item" href="#">Contacto</a></li>
                    </ul>
                  </div>
            </div>
          </form>

        <iframe src="" name="frame" width="100%" height="500" frameborder="0">

        </iframe>



    </div>


    </x-empleado>
