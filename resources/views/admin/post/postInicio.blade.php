
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        @vite(['resources/css/estilo_inicio.css','resources/css/estilo_comentario.css','resources/sss/sss.css','resources/css/estilo_tarjetaPlatillos.css','resources/css/estilo_imgDiagonal.css','resources/css/estilo_tarjetasFlip.css','resources/sss/sss.js',])
        <title>Document</title>
    </head>
    <body >

        <section class="dis-sto">
            <script>
                jQuery(function($){
                    $('.slider-testimonial').sss({
                        slideShow : true,
                        speed : 3500
                    });
                });
            </script>
            <div class="container">
                <a class="btn btn-primary" href="" type="submit">Editar</a>
                <div class="res-info ">

                    <div class="carrucel_imagen border border-dark ">
                          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                @foreach ($posts as $post )
                                    @if ($post->pagina == 'inicio')
                                        @if ($post->categoria == 'carrucel-1')

                                        <div class="carousel-item active">
                                            <img src="{{ asset($post->url) }}" class="d-block w-100" alt="...">
                                        </div>

                                        @endif
                                        @if ($post->categoria == 'carrucel-imagen')

                                            <div class="carousel-item ">
                                                <img src="{{ asset($post->url) }}" class="d-block w-100" alt="...">
                                            </div>

                                        @endif
                                    @endif
                                @endforeach


                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>

                    </div>

                    <div class="res-des pad-rig border border-dark mt-3">

                        @foreach ($posts as $post )
                            @if ($post->pagina == 'inicio')
                                <div class="global">
                                    <h2 class="h2-sub">
                                        @if ($post->categoria == 'carrucel-texto')
                                        <a class="btn btn-primary mt-3" href=" {{ route('admin.post.editar-post',$post->id) }} "  type="submit">Button</a>
                                            {{$post->titulo2}}
                                        @endif
                                    </h2>


                                    <h1 class="head hea-dark">
                                        @if ($post->categoria == 'carrucel-texto')
                                            {{$post->titulo}}
                                        @endif
                                    </h1>
                                    <div class="circle">
                                        <i class="fas fa-circle"></i>
                                    </div>
                                </div>
                                <p>
                                    @if ($post->categoria == 'carrucel-texto')
                                        {{$post->contenido}}
                                    @endif
                                </p>
                            @endif
                        @endforeach

                        <a href="#" class="btn cta-btn">Nosotros</a>
                    </div>

                </div>
            </div>

        </section>

        <section class="container">

            <div class="caracteristicasCard">
                <div class="card-group border border-dark">
                    @foreach ($posts as $post )

                        @if ($post->pagina == 'inicio' )
                            @if ($post->categoria == 'caracteristicas' )
                                <a class="btn btn-primary " href="{{ route('admin.post.editar-post',$post->id) }}" type="submit">Button</a>
                                <div class="cardCar">
                                    <div class="face front">
                                        <img src="{{ asset($post->url) }}" alt="">
                                        <h3>{{ $post->contenido }}</h3>
                                    </div>
                                    <div class="face back">
                                        <h3>{{ $post->contenido }}</h3>
                                        <p>{{ $post->contenido }}</p>

                                    </div>
                                </div>

                            @endif
                        @endif
                    @endforeach

                </div>
            </div>

        </section>


        <section class="taste bt">
            <div class="container">
                <div class="global">
                    <h2 class="h2-sub">
                        <span class="fil">P</span>latillos
                    </h2>
                    <div class="contenedor_Tarjetas">
                        <div class="card-Platillo" style="--i:url('/img/sopa.jpg')">
                            <div class="content-Platillo">
                                <h2>Sopa</h2>
                                <a href="#">Ver detalles</a>
                            </div>
                        </div>
                        <div class="card-Platillo" style="--i:url(/img/segundo.jpg)">
                            <div class="content-Platillo">
                                <h2>Plato Fuerte</h2>
                                <a href="#">Ver detalles</a>
                            </div>
                        </div>
                        <div class="card-Platillo" style="--i:url(/img/ensalada.jpg)">
                            <div class="content-Platillo">
                                <h2>Ensalada</h2>
                                <a href="#">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="disco border border-dark">

            <div class="container">
                <div class="res-info">
                    <div class="res-des">
                        @foreach ($posts as $post )
                            @if ($post->pagina == 'inicio')
                                <div class="global">
                                    <h2 class="h2-sub">
                                        @if ($post->categoria == 'platillos-texto')
                                        <a class="btn btn-primary mt-3" href=" {{ route('admin.post.editar-post',$post->id) }} "  type="submit">Button</a>
                                            {{$post->titulo2}}
                                        @endif
                                    </h2>
                                    <h1 class="head hea-dark">
                                        @if ($post->categoria == 'platillos-texto')
                                            {{$post->titulo}}
                                        @endif
                                    </h1>
                                    <div class="circle">
                                        <i class="fas fa-circle"></i>
                                    </div>
                                </div>
                                <p>
                                    @if ($post->categoria == 'platillos-texto')
                                        {{$post->contenido}}
                                    @endif
                                </p>
                            @endif
                        @endforeach
                    </div>
                    <a class="btn btn-primary" type="submit">Button</a>
                    <div class="container">
                        <div class="containerPlatillos">
                            @foreach ($posts as $post )
                                @if ($post->pagina == 'inicio')
                                    @if ($post->categoria == 'carrucel-1')
                                        <div class="image" style="background-image: url({{ asset($post->url) }}) ;  "></div>
                                    @endif
                                    @if ($post->categoria == 'carrucel-imagen')
                                        <div class="image" style="background-image: url({{ asset($post->url) }}) ; "></div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section >
            <div class="wrapper">
                <div class="slider-testimonial">
                @foreach ( $posts as $post )
                        @if ($post->pagina == 'inicio' )
                            @if ($post->categoria == 'comentarios' )

                                <div class="testimonial-item">

                                    <div class="testimonial-client">
                                        <img src="client.png" alt="">
                                        <p class="client-name">{{ $post->titulo }} {{ $post->titulo2 }}</p>
                                    </div>
                                    <div class="testimonial-text">
                                        <p class="mb-3">{{ $post->contenido }}</p>
                                        <a href="{{ route('admin.post.editarC-post',$post->id) }}" class="btn btn-primary  position-absolute top-50 start-50 translate-middle-x">EDITAR</a>
                                    </div>
                                </div>

                            @endif
                        @endif
                    @endforeach
                </div>
            </div>

        </section>

    </body>
    </html>
