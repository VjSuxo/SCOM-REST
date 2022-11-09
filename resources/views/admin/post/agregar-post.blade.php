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
    <div class="">
      <h1>Agegar Usuario</h1>
    <a href="{{ route('admin.usuario.comentario') }}">COmentariooooo</a>
    <main>
        <form action="{{ route('admin.post.storePost')}}" class="formulario" id="formulario" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Grupo Select Pagina-->
                <div class="formulario__grupo" id="grupo__Categoria" >
                    <label for="correo" class="formulario__label">pag</label>
                    <div class="formulario__grupo-input">
                        <select class="form-select form-select-lg mb-3" name="pagina" id="pagina"  aria-label=".form-select-lg example">
                            <option value="selec">Seleccionar Pagina</option>
                            <option value="inicio">Inicio</option>
                            <option value="nosotros">Nostros</option>
                            <option value="servicios">servicios</option>
                            <option value="contacto">Contacto</option>
                            <option value="preguntas">Preguntas Frecuentes</option>
                        </select>
                    </div>
                    <a type="submit" class="formulario__btn" onclick="verificar()">Enviar</a>
                </div>
                <script>
                    function verificar(){
                        document.getElementById('categoria').disabled=false;
                        document.getElementById('titulo').disabled=false;
                        document.getElementById('contenido').disabled=false;
                        document.getElementById('input-imagen').disabled=false;
                        document.getElementById('boton-enviar').disabled=false;

                        let pagina =  document.getElementById('pagina');
                        let valor = pagina.value;
                        if(valor == "selec"){
                            Swal.fire({
                                title: 'Error!',
                                text: 'Seleccione una pagina',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            })
                        }
                        else{
                            if(valor == "inicio"){
                                llenarInicio();
                            }
                            if(valor == "nosotros"){
                                llenarQuienes();
                            }
                            if(valor == "servicios"){
                                llenarServicios();
                            }
                            if(valor == "contacto"){
                                llenarContacto();
                            }
                            if(valor == "preguntas"){
                                llenarPregunta();
                            }
                        }
                    }

                    function llenarInicio(){
                        var selec = document.getElementById('categoria');
                        selec.options[0]= new Option('carrucel-imagen','carrucel-imagen');
                        selec.options[1]= new Option('Carrucel-Texto','carrucel-texto');
                        selec.options[2]= new Option('caracteristicas','caracteristicas');
                        selec.options[3]= new Option('platillos-carrucel','platillos-carrucel');
                        selec.options[4]= new Option('platillos-texto','platillos-texto');
                        selec.options[5]= new Option('comentarios','comentarios');
                    }

                    function llenarQuienes(){
                        var selec = document.getElementById('categoria');
                        selec.options[0]= new Option('titulo','titulo');
                        selec.options[1]= new Option('historia-1','historia-1');
                        selec.options[2]= new Option('historia-2','historia-2');
                        selec.options[2]= new Option('historia-3','historia-3');
                        selec.options[2]= new Option('historia-4','historia-4');
                        selec.options[2]= new Option('mision','mision');
                        selec.options[2]= new Option('vision','vision');
                        selec.options[2]= new Option('valores','valores');
                    }

                    function llenarContacto(){
                        var selec = document.getElementById('categoria');
                        selec.options[0]= new Option('numero','numero');
                        selec.options[1]= new Option('correo','correo');
                        selec.options[2]= new Option('direccion','direccion');
                    }
                    function llenarPregunta(){
                        var selec = document.getElementById('categoria');
                        selec.options[0]= new Option('Carrucel','carrucel');
                        selec.options[1]= new Option('Carrucel-Texto','carrucel-text');
                        selec.options[2]= new Option('Caracteristicas','caracteristicas');
                        selec.options[3]= new Option('platillos','platillos');
                        selec.options[4]= new Option('Comentarios','comentarios');
                    }
                    function llenarServicios(){
                        var selec = document.getElementById('categoria');
                        selec.options[0]= new Option('Reservas','Reservas');
                        selec.options[1]= new Option('Pedidos','Pedidos');
                        selec.options[2]= new Option('Catering','Catering');
                    }
                </script>

                <!-- Grupo Select Categoria -->
                <div class="formulario__grupo" id="grupo__Categoria" >
                    <label for="correo" class="formulario__label">Categoria</label>
                    <div class="formulario__grupo-input">
                        <select class="form-select form-select-lg mb-3" name="categoria" id="categoria" aria-label="Default select example" disabled="">
                            <option selected>Open this select menu</option>
                        </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <a type="submit" class="formulario__btn " onclick="mostrar()" href="#">Cargar</a>
                </div>

                <script>
                        function mostrar(){
                            let pagina =  document.getElementById('categoria');
                            let valor = pagina.value;
                            if(valor == "carrucel-imagen"){
                                document.getElementById('imagen').style.display = 'block';
                                document.getElementById('titulo').style.display = 'none';
                                document.getElementById('titulo2').style.display = 'none';
                                document.getElementById('contenido').style.display = 'none';
                            }
                            if(valor == "carrucel-texto"){
                                document.getElementById('titulo').style.display = 'block';
                                document.getElementById('titulo2').style.display = 'block';
                                document.getElementById('contenido').style.display = 'block';
                                document.getElementById('imagen').style.display = 'none';
                            }
                            if(valor == "caracteristicas"){
                                document.getElementById('imagenU').style.display = 'block';
                                document.getElementById('titulo').style.display = 'block';
                                document.getElementById('titulo2').style.display = 'none';
                                document.getElementById('contenido').style.display = 'block';
                                document.getElementById('imagen').style.display = 'none';
                                }

                            if(valor == "platillos-carrucel"){
                                document.getElementById('imagen').style.display = 'block';
                                document.getElementById('imagenU').style.display = 'none';
                            }
                            if(valor == "platillos-texto"){
                                document.getElementById('titulo').style.display = 'block';
                                document.getElementById('titulo2').style.display = 'block';
                                document.getElementById('contenido').style.display = 'block';
                                document.getElementById('imagen').style.display = 'none';
                            }
                            if(valor == "comentarios"){
                                document.getElementById('comentario').style.display = 'block';
                                document.getElementById('imagen').style.display = 'none';
                                document.getElementById('titulo').style.display = 'block';
                                document.getElementById('titulo2').style.display = 'none';
                                document.getElementById('contenido').style.display = 'none';
                            }



                        }
                </script>

                <!-- Grupo: Titulo -->
                <div style="display:none" id="titulo">
                    <div class="formulario__grupo" id="grupo__Titulo">
                        <label for="usuario" class="formulario__label">Titulo Post</label>
                        <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="titulo" id="titulo" placeholder="Titulo post" >

                        </div>
                    </div>
                </div>

                <!-- Grupo: Titulo -->
                <div style="display:none" id="titulo2">
                    <div class="formulario__grupo" id="grupo__Titulo">
                        <label for="usuario" class="formulario__label">Titulo 2</label>
                        <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="titulo2" id="titulo" placeholder="Titulo post" ">

                        </div>
                    </div>
                </div>

                <!-- Grupo: Contenido -->
                <div style="display:none" id="contenido">
                    <div class="formulario__grupo" id="grupo__Contenido">
                        <label for="apellidoMaterno" class="formulario__label">Contenido</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="contenido" id="contenido" placeholder="Contenido Post"">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>
                </div>
                <!-- Grupo: Imagen-->
                <div style="display:none" id="imagen">
                    <div class="formulario__grupo" id="grupo__imagen" >
                        <label for="img" class="formulario__label">Imagen</label>
                        <div class="formulario__grupo-input">
                        <input name="file[]" class="form-control" type="file" id="input-imagen" accept="image/*" multiple ><br>
                            @error('file')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Grupo: Imagen 1-->
                <div style="display:none" id="imagenU">
                    <div class="formulario__grupo" id="grupo__imagen" >
                        <label for="img" class="formulario__label">Imagen</label>
                        <div class="formulario__grupo-input">
                        <input name="file[]" class="form-control" type="file" id="input-imagen" accept="image/*" multiple><br>
                            @error('file')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Grupo: comentario-->
                <div style="display:none" id="comentario">
                    <div class="formulario__grupo" id="grupo__Categoria" >
                        <label for="correo" class="formulario__label">pag</label>
                        <div class="formulario__grupo-input">
                            <select class="form-select form-select-lg mb-3" name="comentarioP" id="comentarioP"  aria-label=".form-select-lg example">
                                <option value="0">selec</option>
                                @foreach ( $posts as $post )
                                    <option value="{{ $post->id }}">{{ $post->cliente_id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Visualizar En una alert  -->
                        <a type="button"  class="btn btn-primary"  onclick="vercom()" >Visualisar</a>
                        <script>
                            function vercom(){
                                let pagina =  document.getElementById('comentarioP');
                                let valor = pagina.value;
                                Swal.fire(valor)
                                $("#dato").val(valor);
                            }
                        </script>
                    </div>
                </div>

                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class="formulario__btn" id="boton-enviar" >Enviar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                </div>
                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <a type="submit" href="{{ route('admin.post.show-post') }}" class="formulario__btn" id="boton-enviar" >Finalizar</a>
                </div>
        </form>
    </main>

    </div>
</x-empleado>
