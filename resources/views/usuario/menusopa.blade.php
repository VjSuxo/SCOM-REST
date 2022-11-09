<x-layouts.app >


    <div>
        <h1 class="text-center">Sopa</h1>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($posts as $post)
            @if ( $post->categoria == '123')
                <div class="col">
                    <div class="card h-100">
                        <img class="w-50 rounded mx-auto d-block float-start" src="{{ asset($post->url) }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->titulo }}</h5>
                            <p class="card-text">{{ $post->contenido }}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

</x-layouts>
