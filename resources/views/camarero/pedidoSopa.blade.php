
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/estilo_tarjetasFlip.css',])
    <nav class="navbar-expand-lg navbar-dark bg-dark">

        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('camarero.menu') }}" >Menu</a>
              </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('camarero.pedidoSopa') }}" >Sopa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('camarero.pedidoSegundo') }}" >Plato Fuerte / Segundo</a>
              </li>
            <li class="nav-item">
              <a class="nav-link " href="{{ route('camarero.pedidoEnsalada') }}" >Ensalada</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('camarero.pedidoBebidaS') }}" >Bebida S/A</a>
              </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('camarero.pedidoBebidaC') }}" >Bebida C/A</a>
            </li>
        </ul>
    </nav>
        <div class="container">



            <form action=" {{ route('camarero.agregar') }} " method="POST">
                @csrf

                <div class="caracteristicasCard">
                    <div class="card-group ">
                        @foreach ($sopas as $post )
                                    <div class="cardCar">
                                        <div class="face front">
                                            <img src="{{ asset($post->imgproducto) }}" alt="">

                                            <h3>{{ $post->nombre }}</h3>
                                        </div>
                                        <div class="face back">
                                            <h3>{{ $post->descripcion }}</h3>
                                            <p>{{ $post->nombre }}</p>
                                            <input type="text" name="idProd" value="{{ $post->id }}" style=" display: none " >
                                            <input type="text" name="iduser" value="{{ Auth::user()->id }}" style=" display: none " >
                                            <input type="number" name="cant">
                                            <button type="submit" class="btn btn-primary">Agregar</button>
                                        </div>
                                    </div>
                                    @endforeach
                    </div>
                </div>

            </form>

        </div>

        @include('sweetalert::alert')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

