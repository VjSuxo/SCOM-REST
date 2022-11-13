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
              <a class="nav-link aria-current="page" href="{{ route('home.chef') }}" >Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"" aria-current="page" href="{{ route('chef.agregar-platos') }}" >Agregrar Platos</a>
              </li>
            <li class="nav-item">
              <a class="nav-link " href="{{ route('chef.showPlatos') }}" >Platos</a>
            </li>
        </ul>
    </nav>

    <div class="">
      <h1>Agegar Platos</h1>

    <main>
        <form action="{{ route('chef.storeProducto')}}" class="formulario" id="formulario" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="formulario__grupo" id="grupo__Categoria" >
                <label for="correo" class="formulario__label">pag</label>
                <div class="formulario__grupo-input">
                    <select class="form-select form-select-lg mb-3" name="categoria" id="categoria"  aria-label=".form-select-lg example">
                        <option value="selec">Seleccionar Pagina</option>
                        @foreach ( $cats as $cat )
                        <option value="{{ $cat->nombre_cat }}"> {{ $cat->nombre_cat }} </option>
                        @endforeach
                    </select>
                    <a type="submit" class="formulario__btn " onclick="mostrar()" href="#">Cargar</a>
                </div>

                <script>
                    function mostrar(){
                        let pagina =  document.getElementById('categoria');
                        let valor = pagina.value;
                        if(valor == "sopa"){
                            document.getElementById('titulo').style.display = 'block';
                            document.getElementById('descripcion').style.display = 'block';
                            document.getElementById('costo').style.display = 'block';
                            document.getElementById('grado').style.display = 'none';
                            document.getElementById('imagen').style.display = 'block';
                        }
                        else if(valor == "segundo"){
                            document.getElementById('titulo').style.display = 'block';
                            document.getElementById('descripcion').style.display = 'block';
                            document.getElementById('costo').style.display = 'block';
                            document.getElementById('grado').style.display = 'none';
                            document.getElementById('imagen').style.display = 'block';
                        }
                        else if(valor == "ensalada"){
                            document.getElementById('titulo').style.display = 'block';
                            document.getElementById('descripcion').style.display = 'block';
                            document.getElementById('costo').style.display = 'block';
                            document.getElementById('grado').style.display = 'none';
                            document.getElementById('imagen').style.display = 'block';
                        }
                        else if(valor == "Bebida S/A"){
                            document.getElementById('titulo').style.display = 'block';
                            document.getElementById('descripcion').style.display = 'block';
                            document.getElementById('costo').style.display = 'block';
                            document.getElementById('grado').style.display = 'none';
                            document.getElementById('imagen').style.display = 'block';
                        }
                        else if(valor == "Bebida C/A"){
                            document.getElementById('titulo').style.display = 'block';
                            document.getElementById('descripcion').style.display = 'block';
                            document.getElementById('costo').style.display = 'block';
                            document.getElementById('grado').style.display = 'block';
                            document.getElementById('imagen').style.display = 'block';
                        }
                    }
                </script>

                <div style="display:none" id="chef">
                    <div class="formulario__grupo" id="grupo__Titulo">
                        <label for="usuario" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="idChef" id="idChef" value=" {{ Auth::user()->id }}" >

                        </div>
                    </div>
                </div>


                <!-- Grupo: Nombre -->
                <div style="display:none" id="titulo">
                    <div class="formulario__grupo" id="grupo__Titulo">
                        <label for="usuario" class="formulario__label">Nombre</label>
                        <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="nombre" >

                        </div>
                    </div>
                </div>

                <!-- Grupo: Descripcion -->
                <div style="display:none"  id="descripcion">
                    <div class="formulario__grupo" id="grupo__Titulo">
                        <label for="usuario" class="formulario__label">Descripcion</label>
                        <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="descripcion" id="descripcion" placeholder="descripcion" >

                        </div>
                    </div>
                </div>

                <!-- Grupo: Costo -->
                <div style="display:none"  id="costo">
                    <div class="formulario__grupo" id="grupo__Titulo">
                        <label for="usuario" class="formulario__label">Costo</label>
                        <div class="formulario__grupo-input">
                        <input type="number" class="formulario__input" name="costo" id="costo" placeholder="costo" >

                        </div>
                    </div>
                </div>

                <!-- Grupo: Grado  -->
                <div style="display:none"  id="grado">
                    <div class="formulario__grupo" id="grupo__Titulo">
                        <label for="usuario" class="formulario__label">Grado Alcholico</label>
                        <div class="formulario__grupo-input">
                        <input type="number" class="formulario__input" name="grado" id="grado" placeholder="grado" >

                        </div>
                    </div>
                </div>

                <!-- Grupo: Imagen-->
                <div style="display:none"  id="imagen">
                    <div class="formulario__grupo" id="grupo__imagen" >
                        <label for="img" class="formulario__label">Imagen</label>
                        <div class="formulario__grupo-input">
                        <input name="file" class="form-control" type="file" id="input-imagen" accept="image/*"  ><br>
                            @error('file')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class="formulario__btn" id="boton-enviar" >Enviar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                </div>
            </div>
        </form>
    </main>

    </div>
</x-empleado>
