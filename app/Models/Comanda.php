<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;
    protected $table = 'comandas';
    protected $fillable = [
        'id',
        'fecha',
        'hora',
        'factura_id',
        'mesa_id',
        'chef_id',
    ];

    //Relacion Comanda Producto
    public function productos(){
        return $this -> belongsToMany('App\Models\Producto', 'id');
    }

    //Relacion Chef Comanda (Reversa)
    public function chefs(){
        return $this -> belongsTo('App\Models\Chef', 'id');
    }

    //Relacion Factura Comanda (Reversa)
    public function facturas(){
        return $this -> belongsTo('App\Models\Factura', 'id');
    }

    //Relacion Mesa Comanda (Reversa)
    public function mesas(){
        return $this -> belongsTo('App\Models\Mesa', 'id');
    }
}
