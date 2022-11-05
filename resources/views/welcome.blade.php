<x-layouts.app >
    <link rel="stylesheet" href="/css/estilo_inicio.css">


    <section class="dis-sto">
        <div class="container">
            <div class="res-info">
                <div class="carrucel_imagen">
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            @foreach ($posts as $post )
                            @if ($post->categoria == 'carrucel-1')

                                <div class="carousel-item active ">
                                    <img src="{{ asset($post->url) }}" class="d-block w-100" alt="...">
                                </div>

                            @endif
                            @if ($post->categoria == 'carrucel')

                                <div class="carousel-item">
                                    <img src="{{ asset($post->url) }}" class="d-block w-100" alt="...">
                                </div>

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

                <div class="res-des pad-rig ">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">La Historia</h1>
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
                    <a href="#" class="btn cta-btn">Nosotros</a>
                </div>

            </div>
        </div>
    </section>

    <section class="container">
        <div class="card-group">
            <div class="card text-bg-dark">
                <img src="img/descarga (1).jpeg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small>Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card text-bg-dark">
                <img src="img/descarga (1).jpeg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small>Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card text-bg-dark">
                <img src="img/descarga (1).jpeg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small>Last updated 3 mins ago</small></p>
                </div>
              </div>
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


    <section class="disco">
        <div class="container">
            <div class="res-info">
                <div class="res-des">
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
                <div class="image-group pad-rig">
                    <img src="img/descarga (1).jpeg" alt="">
                    <img src="img/descarga.jpeg" alt="">
                    <img src="img/images.jpeg" alt="">
                    <img src="img/descarga (1).jpeg" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="pb bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                    <span class="fil">P</span>latillos
                </h2>
                <h1 class="head">Lorem</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="res-info">

                <div class="image-group">
                    <img src="img/descarga (1).jpeg" alt="">
                    <img src="img/descarga.jpeg" alt="">
                </div>
                <div class="res-des pad-rig">
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
    </section>


    </x-layouts>
