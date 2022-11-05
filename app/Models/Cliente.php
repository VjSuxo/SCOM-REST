<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = [
        'id',
        'nit',
        'ci_cajero',
    ];

    //Relacion Cliente Factura 1:N
    public function facturas(){
        return $this -> hasMany('App\Models\Factura', 'id');
    }

    //Relacion Cliente Comentario 1:N
    public function comentarios(){
        return $this -> hasMany('App\Models\Comentario', 'id');
    }

    //Relacion Cliente Mesa
    public function mesas(){
        return $this -> hasOne('App\Models\Mesa', 'id');
    }


    // Relacion Cajero Cliente (Reversa) 1:N
    public function cajeros(){
        return $this -> belongsTo('App\Models\Cajero', 'id');
    }

    //Relacion de Herencia (Reversa)

    public function users(){
        return $this -> belongsTo('App\Models\User', 'id');
    }
}
