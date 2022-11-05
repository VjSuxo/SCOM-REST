<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
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

    public function adminHome(){
        return view('/admin/index',["msg"=>"Soy admin"]);
    }

    public function showUser(){
        $user = User::get();
        return view('admin.usuario.show-user',['usuarios'=>$user]);
    }

    public function crearUser(){
        $user = User::get();
        return view('admin.usuario.crear-user',['usuarios'=>$user]);
    }

    public function crearComentario()
    {
        $post = User::get();
        return view('admin.usuario.comentario',['posts'=>$post]);
    }

}
