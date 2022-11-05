<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    protected $table = 'mesas';
    protected $fillable = [
        'id',
        'capacidad',
        'estado',
        'cliente_id',
        'camarero_id',
    ];

    //Relacion Mesa Comanda 1:N
    public function comandas(){
        return $this -> hasMany('App\Models\Comanda', 'id');
    }

    // Relacion de camarero a mesa (Reversa)
    public function camareros(){
        return $this -> belongsTo('App\Models\Camarero', 'id');
    }

    //Relacion Cliente Mesa
    public function clientes(){
        return $this ->belongsTo('App\Models\Cliente', 'id');
    }
}
