<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class MovilController extends Controller
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

    public function index()
    {
        $posts = Post::get();
        return view('/movil/usuario/inicio',['posts'=>$posts]);
    }

}
