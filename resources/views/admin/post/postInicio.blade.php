
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        @vite(['resources/css/estilo_inicio.css'])
        <title>Document</title>
    </head>
    <body>

        <section class="dis-sto">

            <div class="container">
                <a class="btn btn-primary" type="submit">Button</a>
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
                        <a class="btn btn-primary mt-3" type="submit">Button</a>
                        @foreach ($posts as $post )
                            @if ($post->pagina == 'inicio')
                                <div class="global">
                                    <h2 class="h2-sub">
                                        @if ($post->categoria == 'carrucel-texto')
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

            <div class="card-group border border-dark">
                @foreach ($posts as $post )

                    @if ($post->pagina == 'inicio' )
                        @if ($post->categoria == 'caracteristicas' )
                            <a class="btn btn-primary " type="submit">Button</a>
                            <div class="card text-bg-dark">

                                    <img src="{{ asset($post->url) }}" class="card-img" alt="...">
                                    <div class="card-img-overlay">
                                        <p class="card-text "> {{ $post->contenido }} </p>
                                    </div>

                            </div>
                        @endif
                    @endif
                @endforeach

            </div>

        </section>


        <section class="taste bt">
            <div class="container">
                <div class="global">
                    <h2 class="h2-sub">
                        <span class="fil">P</span>latillos
                    </h2>
                    <h1 class="head">Lorem</h1>
                </div>
            </div>
        </section>


        <section class="disco border border-dark">

            <div class="container">
                <div class="res-info">
                    <div class="res-des">
                        <a class="btn btn-primary" type="submit">Button</a>
                        <div class="global">
                            <h2 class="h2-sub">
                                <span class="fil">D</span>escubre
                            </h2>
                            <h1 class="head hea-dark">Menu</h1>
                            <div class="circle">
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Doloremque veniam autem qui magnam ex tempora atque, voluptas
                            voluptatem, recusandae porro corporis assumenda.
                            Aliquam accusamus blanditiis illo, vero quia tempora praesentium.
                        </p>
                        <a href="#" class="btn cta-btn">Pide el menu</a>
                    </div>
                    <a class="btn btn-primary" type="submit">Button</a>
                    <div class="image-group pad-rig">
                        <img src="img/descarga (1).jpeg" alt="">
                        <img src="img/descarga.jpeg" alt="">
                        <img src="img/images.jpeg" alt="">
                        <img src="img/descarga (1).jpeg" alt="">
                    </div>

                </div>
            </div>
        </section>

        <section class="pb bt ">
            <div class="container">
                <div class="global">
                    <h2 class="h2-sub">
                        <span class="fil">P</span>latillos
                    </h2>
                    <h1 class="head">Lorem</h1>
                </div>
            </div>
        </section>

        <section >
            <!--
            <div class="container border border-dark">
                <div class="res-info">
                    <a class="btn btn-primary" type="submit">Button</a>
                    <div class="image-group">
                        <img src="img/descarga (1).jpeg" alt="">
                        <img src="img/descarga.jpeg" alt="">
                    </div>
                    <div class="res-des pad-rig">
                        <a class="btn btn-primary" type="submit">Button</a>
                        <div class="global">
                            <h2 class="h2-sub">
                                <span class="fil">D</span>egusta
                            </h2>
                            <h1 class="head hea-dark">Delisioso menu</h1>
                            <div class="circle">
                                <i class="fas fa-circle"></i>
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Doloremque veniam autem qui magnam ex tempora atque, voluptas
                             voluptatem, recusandae porro corporis assumenda.
                            Aliquam accusamus blanditiis illo, vero quia tempora praesentium.
                        </p>
                        <a href="#" class="btn cta-btn">Has una reservacion</a>
                    </div>

                </div>
            </div>
             -->
             <div class="card-group">

                @foreach ( $posts as $post )
                    @if ($post->pagina == 'inicio' )
                        @if ($post->categoria == 'comentarios' )
                            <div class="card text-bg-light mb-3" style="max-width: 40rem;">
                                <div class="card-body">
                                    <p class="card-text fs-1"> {{ $post->contenido }} </p>
                                    <a href="#" class="card-link fs-3">Card link</a>
                                    <a href="#" class="card-link fs-3">Another link</a>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
              </div>

        </section>

    </body>
    </html>
