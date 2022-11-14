<x-layouts.app >
    @vite(['resources/css/estilo_tarjetasFlip.css',])

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
