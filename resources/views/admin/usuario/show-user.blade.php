<x-empleado.app title='Usuario'>
    <nav class="navbar-expand-lg navbar-dark bg-dark">
    <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('home.admin') }}" >Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.usuario.show-user') }}" >Usuarios</a>
              </li>
            <li class="nav-item">
              <a class="nav-link " href="{{ route('admin.usuario.crear-user') }}" >Crear Usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.post.show-post') }}" >Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.post.agregar-post') }}" >Crear Posts</a>
              </li>
          </ul>

    </nav>
    <div class="container">

        <h1>Lista de Usuario</h1>
        <form action="#" method="GET">
            @csrf @method('PATCH')

            <div class="from-row">
                <div class="col-sm-4 my-1">
                    <input name="texto" class="from-control" type="text" placeholder="Busqueda" >
                </div>
                <div class="col-sm-4 my-1">
                    <input type="submit"  class="btn btn-primary" name="buscando" value="Buscar">
                </div>
            </div>


        </form>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Ci</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Categoria</th>
        <th scope="col">Usuario</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
           <th scope="row">{{ $usuario->id }}</th>
           <td>{{ $usuario->name }}</td>
           <td>{{ $usuario->email }}</td>
           <td>
                @if ( $usuario->rol == 0)
                    Cliente
                @endif
                @if ( $usuario->rol == 1)
                    Editor
                @endif
                @if ( $usuario->rol == 2)
                    Admin
                @endif


           </td>
           <td>{{ $usuario->user}}</td>
           <td>{{ $usuario->password }}</td>
           <td>
            <a  href="#"  class="btn btn-primary"  >
              Editar
            </a>

            <form action="#" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </tr>

        @endforeach
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </tbody>
  </table>

    </div>





</x-empleado>
