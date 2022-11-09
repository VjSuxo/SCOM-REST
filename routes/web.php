<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MenuController;
use PHPUnit\TextUI\XmlConfiguration\Group;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[PostController::class,'showWelcome'])->name('welcome');
Route::get('/login',[SessionsController::class,'create'])->name('login.index');
Route::get('/register',[RegisterController::class,'create'])->name('register');

Route::controller(MenuController::class)->prefix('/usuario')->group(function(){
    Route::view("/menu",'usuario.menu')->name('usuario.menu');
    Route::get("/menusopa",'showSopa')->name('usuario.menusopa');
});

Auth::routes();
//user role
Route::middleware(['auth', 'user-role:user'])->group(function () {
    Route::get("/home",[HomeController::class,'userHome'])->name('home');
});

//chef role
Route::middleware(['auth', 'user-role:editor'])->group(function () {
    Route::get("/editor/home",[HomeController::class,'editorHome'])->name('home.editor');
});

//chef role
Route::middleware(['auth', 'user-role:chef'])->group(function () {
    Route::get("/chef/home",[ChefController::class,'chefHome'])->name('home.chef');

    Route::controller(ProductoController::class)->prefix('/chef')->group(function(){
        Route::get("/agregar-platos",'agregarProducto')->name('chef.agregar-platos');
        Route::get("/showPlatos",'showPlatos')->name('chef.showPlatos');
        Route::post('/','storeProducto')->name('chef.storeProducto');

    });

});


//admin role
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::get("/admin/home",[AdminController::class,'adminHome'])->name('home.admin');

    Route::controller(AdminController::class)->prefix('/admin/usuario')->group(function(){
        Route::get("/show-user",'showUser')->name('admin.usuario.show-user');
        Route::get("/crear-user",'crearUser')->name('admin.usuario.crear-user');
        Route::get("/comentario",'crearComentario')->name('admin.usuario.comentario');
    });

    Route::controller(PostController::class)->prefix('/admin/post')->group(function(){
        Route::get("/show-post",'showPost')->name('admin.post.show-post');
        Route::get("/postInicio",'postInicio')->name('admin.post.postInicio');
        Route::get("/agregar-post",'agregarPost')->name('admin.post.agregar-post');
        Route::get('/{post}/editar-post','editarPost')->name('admin.post.editar-post');
        Route::get('/editarC-post','editarPostC')->name('admin.post.editarC-post');
        Route::patch('/{post}','update')->name('admin.post.update');
        Route::post('/','storePost')->name('admin.post.storePost');
        Route::view('/blanco','admin.post.blanco')->name('admin.post.blanco');
    });

});
