<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    public function userHome(){
        return view('home',["msg"=>"Soy usuario"]);
    }
    public function editorHome(){
        return view('home',["msg"=>"Soy editor"]);
    }
    public function adminHome(){
        return view('home',["msg"=>"Soy admin"]);
    }
}
