<x-empleado.app title='Inicio'>

        <nav class="navbar-expand-lg navbar-dark bg-dark">

            <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('home.admin') }}" >Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('admin.usuario.show-user') }}" >Usuarios</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{ route('admin.usuario.crear-user') }}" >Crear Usuario</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('admin.post.show-post') }}" >Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" >Crear Posts</a>
                      </li>
                  </ul>
            </nav>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Dashboard') }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                 @endif

                            {{ Auth::user()->rol }}
                                <br>
                            {{$msg}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>



</x-empleado>
