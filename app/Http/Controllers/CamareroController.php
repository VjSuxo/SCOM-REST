<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;
use App\Models\Comanda_Producto;
use App\Models\Mesa;
use App\Models\Comanda;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
class CamareroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //public function index()
    //{
     //   return view('home');
    //}

    public function CamareroHome(){
        return view('/camarero/index',["msg"=>"Soy camarero"]);
    }

    public function agregarPedido()
    {
        return view('/camarero/agregarPedido');
    }

    public function agregarMesa()
    {
        return view('/camarero/agregarMesa');
    }

    public function agreMesa(){

    }

    public function controlPedido()
    {
        return view('/camarero/controlPedido');
    }

    public function controlMesa()
    {
        return view('/camarero/controlMesas');
    }



    public function seleccionMesa()
    {
        $mesas = Mesa::get();
        $i=0;
        $vmesas = [];
            foreach ($mesas as $mesa){
                if($mesa->camarero_id == Auth::user()->id){
                    $vmesas[$i] = $mesa;
                    $i++;
                }
            }
        return view('camarero.seleccionmesa',['mesas'=>$vmesas]);
    }
    public function menu(Mesa $mesa)
    {
      return   $mesa ; //= $mesa;
        return view('camarero.menu',['mesas'=>$mesas]);
    }

    public function showSopa()
    {
            $mesas = Mesa::get();
            $sopas=[];
            $vmesas=[];
            $i=0;
            $productos = Producto::get();
            foreach ($productos as $producto){
                if($producto->categoria_id == 1){
                    $sopas[$i] = $producto;
                    $i++;
                }
            }



            return view('camarero.pedidoSopa',['sopas'=>$sopas]);
    }

        public function showSegundo()
        {
            $segundos=[];
            $i=0;
            $productos = Producto::get();
            foreach ($productos as $producto){
                if($producto->categoria_id == 2){
                    $segundos[$i] = $producto;
                    $i++;
                }
            }
            return view('/camarero/pedidoSegundo',['segundos'=>$segundos]);
        }

        public function showEnsalada()
        {
            $ensaladas=[];
            $i=0;
            $productos = Producto::get();
            foreach ($productos as $producto){
                if($producto->categoria_id == 3){
                    $ensaladas[$i] = $producto;
                    $i++;
                }
            }
            return view('/camarero/pedidoEnsalada',['ensaladas'=>$ensaladas]);
        }

        public function showBebidaC()
        {
            $bebidasC=[];
            $i=0;
            $productos = Producto::get();
            foreach ($productos as $producto){
                if($producto->categoria_id == 4){
                    $bebidasC[$i] = $producto;
                    $i++;
                }
        }
            return view('/camarero/pedidoBebidaC',['bebidasC'=>$bebidasC]);
        }

        public function showBebidaS()
        {
            $bebidasS=[];
            $i=0;
            $productos = Producto::get();
            foreach ($productos as $producto){
                if($producto->categoria_id == 5){
                    $bebidasS[$i] = $producto;
                    $i++;
                }
            }
            return view('/camarero/pedidoBebidaS',['bebidasS'=>$bebidasS]);
        }

        public function agregar(Request $request){


            $producto = Producto::find($request->idProd);

            if($producto->stock >= $request->cant){
                $comanda = Comanda::where('mesa_id', $request->nromesa)->first();
                //return $comanda;
                if($comanda != null){
                    //return $comanda;

                    $comanda_producto = new Comanda_Producto;
                    $comanda_producto->comanda_id = $comanda->id;
                    $comanda_producto->cant_pedido = $request -> cant;
                    $comanda_producto->save();
                    return $comanda_producto;
                }
                else{
                    $comanda = new Comanda;
                    $now = Carbon::now();
                    $comanda->fecha = $now->format('Y-m-d');
                    $comanda->hora = $now->toTimeString();
                    $comanda->mesa_id = $request->nromesa;
                    $comanda->save();

                    $comanda_producto = new Comanda_Producto;
                    $comanda_producto->comanda_id = $comanda->id;
                    $comanda_producto->cant_pedido = $request -> cant;
                    $comanda_producto->save();
                }

            }
            else{
                Alert::error('Error', 'La cantidad de platos no existe');
                return back();
            }
        }





}
?>
