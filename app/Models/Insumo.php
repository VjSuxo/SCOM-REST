<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use HasFactory;
    protected $table = 'insumos';
    protected $fillable = [
        'id',
        'nombre',
        'stock',
        'costo',
        'chef_id',
    ];

    //Relacion Chef Insumo (Reversa)
    public function chefs(){
        return $this -> belongsTo('App\Models\Chef', 'id');
    }

    //Relacion Platillo Insumo
    public function platillos(){
        return $this -> belongsToMany('App\Models\Platillo', 'id');
    }

}
