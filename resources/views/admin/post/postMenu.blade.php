
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  @vite(['resources/css/estilo_menu.css'])

<div class="showcase">
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <a href="{{ route('usuario.menusopa') }}">
          <img src="https://d320djwtwnl5uo.cloudfront.net/recetas/cover/sopa-_k1VoM4cvUxpZ0SWRX2a5trJ86mwhjl.png" class="card-img-top" width="125" height="200" alt="...">
          <h5 class="card-title" href ="">SOPA</h5>
        </a>

      </div>
    </div>

    <div class="col">
      <div class="card">
          <a href="">
            <img src=" https://www.comedera.com/wp-content/uploads/2021/01/ensaladas-diferentes.jpg" class="card-img-top" width="125" height="200" alt="...">
            <h5 class="card-title">ENSALADAS</h5>
        </a>

      </div>
    </div>
    <div class="col">
      <div class="card">
        <a href="">
          <img src="https://cdn7.kiwilimon.com/clasificacion/3675/3675.jpg" class="card-img-top" width="125" height="200" alt="...">
            <h5 class="card-title">PLATOS FUERTE</h5>
        </a>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <a href="">
          <img src="https://eldiariony.com/wp-content/uploads/sites/2/2022/05/Bebidas-azucaradas-shutterstock_361921463-1.jpg?quality=60&strip=all&w=1200" class="card-img-top" width="125" height="200" alt="...">
            <h5 class="card-title">BEBIDAS</h5>
        </a>
      </div>
    </div>
  </div>
</div>

