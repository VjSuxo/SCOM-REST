<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Platillo;
use App\Models\Bebida;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{

    public function productoInicioInicio()
    {
        return view('home.chef');
    }
    public function showPlatos()
    {
        $productos =  Producto::get();
        return view('chef.showPlatos',['productos'=>$productos]);
    }

    public function agregarProducto()
    {
        $cats = Categoria::get();
        return view('chef.agregar-platos',['cats'=>$cats]);
    }

    public function editarProducto(Producto $producto)
    {
        return view('chef.editarProducto',['producto'=>$producto]);
    }

    public function storeProducto(Request $request){



                if($request->hasFile('file')){
                    $file = $request->file('file');
                        $producto = new  Producto;
                        $imagen = $file->store('public/img/productos');
                        $url = Storage::url($imagen);
                        $producto->imgproducto = $url;
                        $producto->nombre = $request->nombre;
                        $producto->descripcion = $request->descripcion;
                        $producto->stock = 0;
                        $producto->estado = "false";
                        $producto->costo = $request->costo;
                        $producto->chef_id = $request->idChef;
                        if($request->categoria == 'sopa'){
                            $producto->categoria_id = 1;
                        }
                        else if($request->categoria == 'platofuerte'){
                            $producto->categoria_id = 2;
                        }
                        else if($request->categoria == 'ensalada'){
                            $producto->categoria_id = 3;
                        }
                        else if($request->categoria == 'Bebida S/A'){
                            $producto->categoria_id = 4;
                        }
                        else if($request->categoria == 'Bebida C/A'){
                            $producto->categoria_id = 5;
                        }
                        $producto->save();
                        if($request->categoria == 'sopa'){
                            $platillo = new Platillo;
                            $platillo->id = $producto->id;
                            $platillo->save();
                        }
                        else if($request->categoria == 'platofuerte'){
                            $platillo = new Platillo;
                            $platillo->id = $producto->id;
                            $platillo->save();
                        }
                        else if($request->categoria == 'ensalada'){
                            $platillo = new Platillo;
                            $platillo->id = $producto->id;
                            $platillo->save();
                        }
                        else if($request->categoria == 'Bebida S/A'){
                            $bebida = new Bebida;
                            $bebida->id = $producto->id;
                            $bebida->grado_alcohol = 0;
                            $bebida->save();
                        }
                        else if($request->categoria == 'Bebida C/A'){
                            $bebida = new Bebida;
                            $bebida->id = $producto->id;
                            $bebida->grado_alcohol = $request->grado;
                            $bebida->save();
                        }


                    Alert::success('Guardado', 'Datos almacenados exitosamente');
                    return back();

                }
                else{
                    Alert::error('Error', 'Subir imagenes');
                    return back();

                }




    }


    public function editarPostC()
    {
        $posts = Comentario::get();
        return view('admin.post.editarC-post',['posts'=> $posts]);
    }

    public function update(Request $request,Producto $producto)
    {
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->costo = $request->input('costo');
        $producto->estado = $request->input('estado');
        $producto->stock = $request->input('stock');
        $producto->imgproducto =  $request->input('img');
        $producto->save();
        Alert::success('Guardado', $producto->id);
        return back();
    }

    public function destroy(Producto $producto){
        $platillo = Platillo::find($producto->id);
        if($platillo != ''){
            $platillo->delete();
        }
        $bebida = Bebida::find($producto->id);
        if($bebida != ''){
            $bebida->delete();
        }

        $producto->delete();
        return to_route('chef.showPlatos');
    }

}
