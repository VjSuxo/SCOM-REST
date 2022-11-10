<x-empleado.app title='Inicio'>

    <nav class="navbar-expand-lg navbar-dark bg-dark">

            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="{{ route('home.chef') }}" >Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('chef.agregar-platos') }}" >Agregrar Platos</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{ route('chef.showPlatos') }}" >Platos</a>
                </li>
            </ul>
        </nav>

        <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Estado</th>
                        <th scope="col" style="width:25vh">Imagen</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <th scope="row">{{ $producto->id }}</th>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->costo}}</td>
                            <td>{{ $producto->stock}}</td>
                            <td>{{ $producto->estado }}</td>
                            <td style="width:25vh">
                                <img class="w-50 rounded mx-auto d-block float-start" src="{{ asset($producto->imgproducto) }}" alt="">
                            </td>
                            <td>
                                @if ( $producto->categoria_id == '1')
                                    Sopa
                                @endif
                                @if ( $producto->categoria_id == '2')
                                    Plato Fuerte
                                @endif
                                @if ( $producto->categoria_id == '3')
                                    Ensalada
                                @endif
                                @if ( $producto->categoria_id == '4')
                                    Bebida S/A
                                @endif
                                @if ( $producto->categoria_id == '5')
                                    Bebida C/A
                                @endif
                            </td>
                            <td>
                                <a  href=" {{ route('chef.editarProducto', $producto->id) }} "  class="btn btn-primary">
                                Editar
                                </a>
                                <form action="{{ route('producto.destroy',$producto->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
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
