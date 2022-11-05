<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    protected $fillable = [
        'id',
        'nombre_cat',
    ];

    //Relacion Categoria Producto
    public function productos(){
        return $this -> hasMany('App\Models\Producto', 'id');
    }
}
