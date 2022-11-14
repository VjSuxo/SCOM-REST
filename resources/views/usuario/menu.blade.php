<x-layouts.app >
@vite(['resources/css/estilo_yo.css'])
<style>
@import url('https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap');
</style>


<div class="showcase">
  <div class="row row-cols-1 row-cols-md-2">

    <div class="col">
      <div class="contenedor">
        <a href="{{ route('usuario.menusopa') }}">
          <figure>
            <img src="https://d320djwtwnl5uo.cloudfront.net/recetas/cover/sopa-_k1VoM4cvUxpZ0SWRX2a5trJ86mwhjl.png">
              <div class="capa">
                <h3>SOPAS</h3>
              </div>
          </figure>
        </a>
      </div>
    </div>



    <div class="col">
      <div class="contenedor">
        <a href="{{ route('usuario.menuensalada') }}">
          <figure>
            <img src="https://www.comedera.com/wp-content/uploads/2021/01/ensaladas-diferentes.jpg">
              <div class="capa">
                <h3>ENSALADAS</h3>
              </div>
          </figure>
        </a>
      </div>
    </div>



    <div class="col">
      <div class="contenedor">
        <a href="{{ route('usuario.menusegundo') }}">
          <figure>
            <img src="https://cdn7.kiwilimon.com/clasificacion/3675/3675.jpg">
              <div class="capa">
                <h3>PLATOS FUERTES</h3>
              </div>
          </figure>
        </a>
      </div>
    </div>




    <div class="col">
      <div class="contenedor">
        <a href="{{ route('usuario.bebidascs') }}">
          <figure>
            <img src="https://eldiariony.com/wp-content/uploads/sites/2/2022/05/Bebidas-azucaradas-shutterstock_361921463-1.jpg?quality=60&strip=all&w=1200">
              <div class="capa">
                <h3>BEBIDAS</h3>
              </div>
          </figure>
        </a>
      </div>

    </div>

  </div>
</div>
</x-layouts>


