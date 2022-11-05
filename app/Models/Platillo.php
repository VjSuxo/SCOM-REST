<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    use HasFactory;
    protected $table = 'platillos';
    protected $fillable = [
        'id',
    ];

    //Relacion Platillos Insumo N:M
    public function insumos(){
        return $this -> belongsToMany('App\Models\Insumo', 'id');
    }
}
