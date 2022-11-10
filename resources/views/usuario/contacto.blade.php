


<x-layouts.app >
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    @vite(['resources/css/estilo_inicio.css','resources/css/estilo_preguntas.css','resources/js/preguntas.js','resources/css/estilo_comentario.css','resources/sss/sss.css','resources/css/estilo_tarjetaPlatillos.css','resources/css/estilo_imgDiagonal.css','resources/css/estilo_nosotros.css','resources/css/estilo_tarjetasFlip.css','resources/sss/sss.js',])

<div class="showcase2 ">
    <div id="contenidos-paginas">
        <div id="centro3">
            <h2>
                <em class="encabezados t1">Contacta con</em>
                <em class="encabezados t2">Nosotros</em>
            </h2>
            <p class="descripcion-pagina">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
            </p>
            <hr>

            <div id="contenido-nosotros">

                <div id="izquierda">
                    <p class="descripcion-pagina texto-contacto">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.<br>
                        Telélefono: <strong>2626-2626</strong><br>
                        Celular: <strong>7575-7575</strong><br>
                        Email: <strong><a href="mailto: juanventura200@gmail.com" class="email-contacto">juanventura200@gmail.com</a></strong>
                    </p>
                </div>


                <div id="derecha">
                    <form action="#" method="POST">
                        <input type="text" name="nombre" placeholder="Ingresa tu nombre" class="nombre-mensaje">
                        <br>
                        <input type="email" name="correo" placeholder="Ingresa tu coreo" class="email-asunto">

                        <input type="text" name="asunto" placeholder="Ingresa el asunto" class="email-asunto"><br>

                        <textarea name="mensaje" placeholder="Ingrese su mensaje " class="nombre-mensaje"></textarea><br>

                        <input type="submit" name="enviar" value="Enviar consulta">
                    </form>
                </div>

                <div id="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.205886558182!2d-88.16743098199365!3d13.461402473858934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72953df7e0502a9b!2sMetrocentro+San+Miguel!5e0!3m2!1ses-419!2ssv!4v1564899753613!5m2!1ses-419!2ssv" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>


            </div>


        </div>
    </div>
</div>

    </x-layouts>
