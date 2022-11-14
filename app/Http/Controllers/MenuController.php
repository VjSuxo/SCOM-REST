<?php
    namespace App\Http\Controllers;

    use App\Models\Producto;
    use App\Models\Bebida;
    use App\Models\Usuario;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Storage;
    use RealRashid\SweetAlert\Facades\Alert;

    class MenuController extends Controller{

        public function index(){
            return view('usuario.menu');
        }

        public function showSopa()
        {
            $sopas;
            $i=0;
            $productos = Producto::get();
            foreach ($productos as $producto){
                if($producto->categoria_id == 1){
                    $sopas[$i] = $producto;
                    $i++;
                }
            }
            return view('usuario.menusopa',['sopas'=>$sopas]);
        }

        public function showSegundo()
        {
            $segundos;
            $i=0;
            $productos = Producto::get();
            foreach ($productos as $producto){
                if($producto->categoria_id == 2){
                    $segundos[$i] = $producto;
                    $i++;
                }
            }
            return view('usuario.menusegundo',['segundos'=>$segundos]);
        }

        public function showEnsalada()
        {
            $ensaladas;
            $i=0;
            $productos = Producto::get();
            foreach ($productos as $producto){
                if($producto->categoria_id == 3){
                    $ensaladas[$i] = $producto;
                    $i++;
                }
            }
            return view('usuario.menuensalada',['ensaladas'=>$ensaladas]);
        }

        public function showBebidaC()
        {
            $bebidasC;
            $i=0;
            $productos = Producto::get();

            foreach ($productos as $producto){

                if($producto->categoria_id == 5){
                    $bebidasC[$i] = $producto;
                    $i++;
                }
            }
            return view('usuario.menubebidaC',['bebidasC'=>$bebidasC]);
        }

        public function showBebidaS()
        {
            $bebidasS;
            $i=0;
            $productos = Producto::get();
            foreach ($productos as $producto){
                if($producto->categoria_id == 4){
                    $bebidasS[$i] = $producto;
                    $i++;
                }
            }
            return view('usuario.menubebidaS',['bebidasS'=>$bebidasS]);
        }

    }


