<x-empleado.app title='Inicio'>

    <nav class="navbar-expand-md navbar-dark bg-dark shadow-sm">

        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('home.camarero') }}" >Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('camarero.agregarPedido') }}" >Agergar Pedido</a>
              </li>
            <li class="nav-item">
              <a class="nav-link " href="{{ route('camarero.controlPedido') }}" >Control Pedidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('camarero.controlMesa') }}" >Control Mesas</a>
              </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('camarero.agregarMesa') }}" >Agregar Mesas</a>
            </li>
        </ul>
    </nav>

        <div class="container">

          <iframe src="{{ route('camarero.seleccionmesa') }}" class="mt-3 "  name="frame" width="100%" height="500" frameborder="0">

          </iframe>

        </div>



</x-empleado>
