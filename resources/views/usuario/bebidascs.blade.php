<x-layouts.app >
@vite(['resources/css/estilo_yo.css'])
<style>
@import url('https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap');
</style>


<div class="showcase">
  <div class="row row-cols-1 row-cols-md-2">

    <div class="col">
      <div class="contenedor">
        <a href="{{ route('usuario.menubebidas') }}">
          <figure>
            <img src="https://okdiario.com/img/2016/05/21/recetas-cocteles-fruta-sin-alcohol.jpg">
              <div class="capa">
                <h3>SIN ALCOHOL</h3>
              </div>
          </figure>
        </a>
      </div>
    </div>



    <div class="col">
      <div class="contenedor">
        <a href="{{ route('usuario.menubebidac') }}">
          <figure>
            <img src="https://revistaelconocedor.com/wp-content/uploads/2015/12/historia.jpg">
              <div class="capa">
                <h3>CON ALCOHOL</h3>
              </div>
          </figure>
        </a>
      </div>
    </div>


  </div>
</div>
</x-layouts>
