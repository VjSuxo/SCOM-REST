<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;
    protected $table = 'chefs';
    protected $fillable = [
        'id',
        'anios_exp',
    ];

    // Relacion Chef Insumo 1:N
    public function insumos(){
        return $this -> hasMany('App\Models\Insumo', 'id');
    }

    //Relacion Chef Comanda 1:N
    public function comandas(){
        return $this -> hasMany('App\Models\Comanda', 'id');
    }

    //Relacion Chef Producto 1:N
    public function productos(){
        return $this -> hasMany('App\Models\Producto', 'id');
    }

    //Relacion de Herencia (Reversa)

    public function users(){
        return $this -> belongsTo('App\Models\User', 'id');
    }

}
