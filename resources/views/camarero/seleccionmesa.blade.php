
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])



<div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach ( $mesas as $mesa )
        <div class="col">
            <div class="card text-center border-dark mb-3" style="max-width: 18rem;">
                <img src="/img/icon-mesa.png" class="card-img-top " alt="...">
                <div class="card-body  border-dark mb-3">
                    <h5 class="card-title"> {{ $mesa->id }} </h5>
                    <a href=" {{ route('camarero.menu',$mesa) }} " class="btn btn-primary">Seleccionar</a>
                </div>
            </div>
        </div>
    @endforeach
  </div>
