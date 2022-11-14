<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    public function showWelcome()
    {
        $post = Post::get();
        return view('welcome',['posts'=>$post]);
    }
    public function showPost()
    {
        $post = Post::get();
        return view('admin.post.show-post',['posts'=>$post]);
    }
    public function postInicio()
    {
        $post = Post::get();
        return view('admin.post.postInicio',['posts'=>$post]);
    }
    public function postMenu()
    {
        $post = Post::get();
        return view('admin.post.postMenu',['posts'=>$post]);
    }
    public function agregarPost()
    {
        $post = Comentario::get();
        return view('admin.post.agregar-post',['posts'=>$post]);
    }

    public function storePost(Request $request){

        if($request->pagina == 'inicio'){
            if($request->categoria == 'carrucel-imagen'){
                if($request->hasFile('file')){
                    $files = $request->file('file');
                    $i = 0;
                    foreach($files as $file){
                        $post = new  Post;
                        $imagen = $file->store('public/img/inicio/carrucel');
                        $url = Storage::url($imagen);
                        $post->url = $url;
                        $post->pagina = $request->pagina;
                        if($i == 0){
                            $post->categoria = 'carrucel-1';
                        }
                        else{
                            $post->categoria = $request->categoria;
                        }
                        $post->titulo = $request->titulo;
                        $post->contenido = $request->contenido;
                        $post->save();
                        $i++;
                    }
                    Alert::success('Guardado', 'Datos alamcenados carrucel con exito ');
                    return back();

                }
                else{
                    Alert::error('Error', 'Subir imagenes');
                    return back();

                }
            }
            else if($request->categoria == 'carrucel-texto'){
                    if($request->titulo != '' && $request->titulo2 != ''){
                        $post = new  Post;
                        $post->url = '';
                        $post->pagina = $request->pagina;
                        $post->categoria = $request->categoria;
                        $post->titulo = $request->titulo;
                        $post->titulo2 = $request->titulo2;
                        $post->contenido = $request->contenido;
                        $post->save();
                        Alert::success('Guardado', 'Datos alamcenados carrucel con exito ');
                        return back();
                    }
                    else{
                        Alert::error('Error', 'Datos no alamcenados con exito ');
                        return back();
                    }
            }

            else if($request->categoria == 'caracteristicas'){
                Alert::success('acsad', 'Datos alamcenados carrucel con exito ');
                if($request->hasFile('file')){
                    $files = $request->file('file');
                    $i = 0;
                    foreach($files as $file){
                        $post = new  Post;
                        $imagen = $file->store('public/img/inicio/caracteristicas');
                        $url = Storage::url($imagen);
                        $post->url = $url;
                        $post->pagina = $request->pagina;
                        if($i == 0){
                            $post->categoria = $request->categoria;
                            break;
                        }

                        $i++;
                    }
                        $post->titulo = $request->titulo;
                        $post->contenido = $request->contenido;
                        $post->save();

                    Alert::success('Guardado', 'Datos alamcenados carrucel con exito ');
                    return back();

                }
                else{
                    Alert::error('Error', 'Subir imagen');
                    return back();

                }
            }
            else if($request->categoria == 'platillos-carrucel'){
                if($request->hasFile('file')){
                    $files = $request->file('file');
                    $i = 0;
                    foreach($files as $file){
                        $post = new  Post;
                        $imagen = $file->store('public/img/inicio/platillos');
                        $url = Storage::url($imagen);
                        $post->url = $url;
                        $post->pagina = $request->pagina;
                        if($i == 0){
                            $post->categoria = 'platillo-1';
                        }
                        else{
                            $post->categoria = $request->categoria;
                        }
                        $post->titulo = $request->titulo;
                        $post->contenido = $request->contenido;
                        $post->save();
                        $i++;
                    }
                    Alert::success('Guardado', 'Datos alamcenados carrucel con exito ');
                    return back();

                }
                else{
                    Alert::error('Error', 'Subir imagenes');
                    return back();

                }
            }
            else if($request->categoria == 'platillos-texto'){
                    if($request->titulo != '' && $request->titulo2 != ''){
                        $post = new  Post;
                        $post->url = '';
                        $post->pagina = $request->pagina;
                        $post->categoria = $request->categoria;
                        $post->titulo = $request->titulo;
                        $post->titulo2 = $request->titulo2;
                        $post->contenido = $request->contenido;
                        $post->save();
                        Alert::success('Guardado', 'Datos alamcenados carrucel con exito ');
                        return back();
                    }
                    else{
                        Alert::error('Error', 'Datos no alamcenados con exito ');
                        return back();
                    }
            }
            else if($request->categoria == 'comentarios'){
                    $comen = Comentario::find($request->comentarioP);
                    $user = User::find($comen->cliente_id);
                    $post = new  Post;
                    $post->url = '';
                    $post->pagina = $request->pagina;
                    $post->categoria = $request->categoria;
                    $post->titulo = $user->name;
                    $post->titulo2 = $user->ap_paterno;;
                    $post->contenido = $comen->texto;
                    $post->save();
                    Alert::success('Guardado', 'Datos alamcenados carrucel con exito ');
                    return back();
            }

        }
        else{
            Alert::error('Error', 'Rellenar Datos');
            return back();
        }

    }

    public function editarPost(Post $post)
    {
        return view('admin.post.editar-post',['post'=> $post]);
    }


    public function update(Request $request,Post $post)
    {
        $post->titulo = $request->input('titulo');
        $post->titulo2 = $request->input('titulo2');
        $post->contenido = $request->input('contenido');
        $post->save();
        return view('admin.post.blanco');
    }

}

