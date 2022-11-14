<x-layouts.app >
<!--  carrusel -->
<div class="carrucel_imagen">
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
                      <img src="{{ asset($post->url) }}" class="d-block w-100" style="" alt="...">
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
<!--  botones -->
    <div class="d-grid gap-2 d-md-block" >
        <button class="btn btn-primary" type="button">Sopas</button>
        <button class="btn btn-primary" type="button">Plato fuerte</button>
    </div>
    <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-primary" type="button">Ensaladas</button>
        <button class="btn btn-primary" type="button">Bebidas</button>
    </div>
<!-- sopas -->
    <div class="showcase2">

  <div class="container">
    <div class="caracteristicasCard">
        <div class="card-group ">
            @foreach ($segundos as $post )

                        <div class="cardCar">
                            <div class="face front">
                                <img src="{{ asset($post->imgproducto) }}" alt="">
                                <h3>{{ $post->nombre }}</h3>
                            </div>
                            <div class="face back">
                                <h3>{{ $post->descripcion }}</h3>
                                <p>{{ $post->nombre }}</p>

                            </div>
                        </div>

            @endforeach

        </div>
    </div>
  </div>

</div>
<!--  bebidas -->
<div class="showcase2">

  <div class="container">
    <div class="caracteristicasCard">
        <div class="card-group ">
            @foreach ($segundos as $post )

                        <div class="cardCar">
                            <div class="face front">
                                <img src="{{ asset($post->imgproducto) }}" alt="">
                                <h3>{{ $post->nombre }}</h3>
                            </div>
                            <div class="face back">
                                <h3>{{ $post->descripcion }}</h3>
                                <p>{{ $post->nombre }}</p>

                            </div>
                        </div>

            @endforeach

        </div>
    </div>
  </div>

</div>
<!--  ensaladas -->
<div class="showcase2">

  <div class="container">
    <div class="caracteristicasCard">
        <div class="card-group ">
            @foreach ($segundos as $post )

                        <div class="cardCar">
                            <div class="face front">
                                <img src="{{ asset($post->imgproducto) }}" alt="">
                                <h3>{{ $post->nombre }}</h3>
                            </div>
                            <div class="face back">
                                <h3>{{ $post->descripcion }}</h3>
                                <p>{{ $post->nombre }}</p>

                            </div>
                        </div>

            @endforeach

        </div>
    </div>
  </div>

</div>
<!--  plato fuerte-->
<div class="showcase2">

  <div class="container">
    <div class="caracteristicasCard">
        <div class="card-group ">
            @foreach ($segundos as $post )

                        <div class="cardCar">
                            <div class="face front">
                                <img src="{{ asset($post->imgproducto) }}" alt="">
                                <h3>{{ $post->nombre }}</h3>
                            </div>
                            <div class="face back">
                                <h3>{{ $post->descripcion }}</h3>
                                <p>{{ $post->nombre }}</p>

                            </div>
                        </div>

            @endforeach

        </div>
    </div>
  </div>

</div>


</x-layouts>
