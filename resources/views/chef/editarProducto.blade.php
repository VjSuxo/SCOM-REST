<x-empleado.app title='EditarProducto'>
    @vite(['resources/css/estilo_registroAdm.css'])
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <div class="container mt-3 border border-dark rounded  border-3">
        <h1 class="text-center mt-3">{{ $producto->id }}/{{ $producto->nombre }}</h1>
        <main>
            <form action="{{ route('chef.update',$producto->id) }}" class="formulario" id="formulario" method="POST">
        @csrf @method('PATCH')
                <!-- Grupo: id -->
                <div class="formulario__grupo" id="grupo__usuario"  style="display:none">
                    <label for="usuario" class="formulario__label">Nombre</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="id" id="id" value="{{ old('id',$producto->id) }}" >
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                </div>
                <!-- Grupo: Nombre -->
                <div class="formulario__grupo" id="grupo__usuario">
                    <label for="usuario" class="formulario__label">Nombre</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="nombre" id="nombre" value="{{ old('nombre',$producto->nombre) }}" >
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                </div>

                <!-- Grupo: Descripcion-->
                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="descripcion" class="formulario__label">Descripcion</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="descripcion" id="descripcion" value="{{ old('descripcion',$producto->descripcion) }}" >
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
                </div>
                <!-- Grupo: Costo -->

                <div class="formulario__grupo" id="grupo__apellidoPaterno">
                    <label for="costo" class="formulario__label">Costo</label>
                    <div class="formulario__grupo-input">
                        <input type="number" class="formulario__input" name="costo" id="costo" value="{{ old('costo',$producto->costo) }}" >
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
                </div>

                  <!-- Grupo: Stock -->
                <div class="formulario__grupo" id="grupo__apellidoMaterno">
                    <label for="apellidoMaterno" class="formulario__label">Stock</label>
                    <div class="formulario__grupo-input">
                        <input type="number" class="formulario__input" name="stock" id="stock" value="{{ old('stock',$producto->stock) }}">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
                </div>

                <!-- Grupo: Estado -->
                <div class="formulario__grupo" id="grupo__apellidoMaterno">
                    <label for="estado" class="formulario__label">Estado</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="estado" id="estado" value="{{ old('estado',$producto->estado) }}">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                </div>

                <div class="formulario__grupo" id="grupo__apellidoMaterno" style="display:none">
                    <label for="estado" class="formulario__label">Estado</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="img" id="img" value="{{ old('imgproducto',$producto->imgproducto) }}">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                </div>



                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class="formulario__btn">Enviar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                </div>
                 <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <a type="submit" href="{{ route('chef.showPlatos') }}" class="formulario__btn">Finalizar</a>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                </div>
            </form>
        </main>

    </div>






</x-empleado>
