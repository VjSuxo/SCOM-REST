<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'costo',
        'estado',
        'stock',
        'imgproducto',
        'categoria_id',
        'chef_id',
    ];

    //Relacion de Herencia Producto -> Platillo, Bebida
    public function platillos(){
        return $this -> hasOne('App\Models\Platillo', 'id');
    }

    public function bebidas(){
        return $this -> hasOne('App\Models\Bebida', 'id');
    }

    //Relacion Comanda Producto
    public function comandas(){
        return $this -> belongsToMany('App\Models\Comanda', 'id');
    }

    //Relacion Chef Producto (Reversa)
    public function chef(){
        return $this -> belongsTo('App\Models\Chef', 'id');
    }

    //Relacion Categoria Producto (Reversa)
    public function categorias(){
        return $this -> belongsTo('App\Models\Categoria', 'id');
    }


}
