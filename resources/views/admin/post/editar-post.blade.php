<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/css/estilo_registroAdm.css'])
</head>
<body>
    <h1> {{ $post->id }} </h1>
        <form action={{ route('admin.post.update',$post->id) }} class="formulario" id="formulario" method="POST">
            @csrf @method('PATCH')
                <!-- Grupo: Usuario -->
                <div class="formulario__grupo" id="grupo__usuario">
                    <label for="usuario" class="formulario__label">Titulo</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="titulo" id="titulo" value="{{ old('title',$post->titulo) }}">
                    </div>
                </div>
                <div class="formulario__grupo" id="grupo__usuario">
                    <label for="usuario" class="formulario__label">Titulo 2</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="titulo2" id="titulo" value="{{ old('title',$post->titulo2) }}">
                    </div>
                </div>
                <div class="formulario__grupo" id="grupo__usuario">
                    <label for="usuario" class="formulario__label">Contenido</label>
                    <div class="formulario__grupo-input">
                        <textarea class="formulario__input" style="height: 100px" id="contenido" name="contenido" rows="3" > {{$post->contenido }} </textarea>
                    </div>
                </div>
                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button  type="submit" class="formulario__btn">Enviar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                </div>
            </form>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
