<?php
    namespace App\Http\Controllers;

    use App\Models\;
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
            $productos = Productos::get();
            foreach ($productos as $producto){
                if($producto->categoria_id == 1){
                    $sopas[i] = $producto;
                }
            }
            return view('usuario.menusopa',['sopas'=>$sopas]);
        }

    }


