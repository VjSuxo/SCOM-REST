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

        <form action="" class="formulario" id="formulario" method="POST">
            @csrf @method('PATCH')
                <!-- Grupo: comentario-->
                <div  id="comentario">
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
            </form>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
