<x-empleado.app title='Agegar Post'>
    @vite(['resources/css/estilo_registroAdm.css'])
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
    <div class="container">
        <main>
            <form action="" class="formulario" id="formulario" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="formulario__grupo" id="grupo__Titulo">
                    <label for="usuario" class="formulario__label">Titulo Post</label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="comentario" id="titulo" placeholder="Titulo post" disabled="">

                    </div>
                </div>
            </div>
            <div class="formulario__grupo" id="grupo__Categoria" >
                <label for="correo" class="formulario__label">pag</label>
                <div class="formulario__grupo-input">
                    <select class="form-select form-select-lg mb-3" name="comentarioP" id="pagina"  aria-label=".form-select-lg example">
                        @foreach ( $posts as $post )
                            <option value="{{ $post->id }}">{{ $post->id }}</option>
                        @endforeach
                    </select>
                </div>
                <a type="submit" class="formulario__btn" onclick="buscarCom()">Enviar</a>
                <script>
                    function buscarCom(){
                        let pagina =  document.getElementById('comentarioP');
                        let valor = pagina.value;

                    }
                </script>
            </div>
            </form>
        </main>
    </div>

</x-empleado>
