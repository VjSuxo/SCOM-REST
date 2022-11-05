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
              <a class="nav-link  active" href="{{ route('admin.usuario.crear-user') }}" >Crear Usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.post.show-post') }}" >Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.post.agregar-post') }}" >Crear Posts</a>
              </li>
          </ul>

    </nav>


    <div class="container mt-3 border border-dark rounded  border-3">
        <h1 class="text-center mt-3">Agegar Usuario</h1>
        <main>
            <form action="#" class="formulario" id="formulario" method="POST">
        @csrf
                <!-- Grupo: Usuario -->
                <div class="formulario__grupo" id="grupo__usuario">
                    <label for="usuario" class="formulario__label">Usuario</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="juan123">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                </div>

                <!-- Grupo: Nombre -->
                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="nombre" class="formulario__label">Nombre</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Juan David">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
                </div>
                <!-- Grupo: Ap_Paterno -->

                <div class="formulario__grupo" id="grupo__apellidoPaterno">
                    <label for="apellidoPaterno" class="formulario__label">Ap. Paterno</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="apellidoPaterno" id="apellidoPaterno" placeholder="Reyes">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
                </div>

                  <!-- Grupo: Ap_Materno -->
                <div class="formulario__grupo" id="grupo__apellidoMaterno">
                    <label for="apellidoMaterno" class="formulario__label">Ap. Materno</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="apellidoMaterno" id="apellidoMaterno" placeholder="Elizondo">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 letras y solo puede contener constantes y vocales.</p>
                </div>

                <!-- Grupo: Contraseña -->
                <div class="formulario__grupo" id="grupo__password">
                    <label for="password" class="formulario__label">Contraseña</label>
                    <div class="formulario__grupo-input">
                        <input type="password" class="formulario__input" name="password" id="password">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
                </div>

                <!-- Grupo: Contraseña 2 -->
                <div class="formulario__grupo" id="grupo__password2">
                    <label for="password2" class="formulario__label">Repetir Contraseña</label>
                    <div class="formulario__grupo-input">
                        <input type="password" class="formulario__input" name="password2" id="password2">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
                </div>

                <!-- Grupo: Correo Electronico -->
                <div class="formulario__grupo" id="grupo__correo">
                    <label for="correo" class="formulario__label">Correo Electrónico</label>
                    <div class="formulario__grupo-input">
                        <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                </div>
          <!-- Grupo Select -->
          <div class="formulario__grupo" id="grupo__correo">
                    <label for="correo" class="formulario__label">Categoria</label>
                    <div class="formulario__grupo-input">
            <select class="form-select" name="categoria" aria-label="Default select example">
               <option selected>Seleccionar Categoria</option>
              <option value="0">cliente</option>
              <option value="3">cajero</option>
              <option value="4">chef</option>
              <option value="1">camarero</option>
            </select>
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                </div>

                <!-- Grupo: ci -->
                <div class="formulario__grupo" id="grupo__ci">
                    <label for="ci" class="formulario__label">C.I.</label>
                    <div class="formulario__grupo-input">
                        <input type="number" class="formulario__input" name="ci" id="ci" placeholder="12345678">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 8 dígitos.</p>
                </div>

                <div class="formulario__mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>

                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class="formulario__btn">Enviar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                </div>
            </form>
        </main>

    </div>








    </x-empleado>
