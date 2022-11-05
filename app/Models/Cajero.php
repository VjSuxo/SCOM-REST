<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cajero extends Model
{
    use HasFactory;
    protected $table = 'cajeros';
    protected $fillable = [
        'id',
        'fecha_ingreso',
    ];

    //Relacion de Cajero -> Factura 1:N
    public function facturas(){
        return $this -> hasMany('App\Models\Factura', 'factura_id');
    }

    //Relacion de Cajero -> Cliente 1:N
    public function clientes(){
        return $this -> hasMany('App\Models\Cliente', 'id');
    }

    //Relacion de Herencia (Reversa)

    public function users(){
        return $this -> belongsTo('App\Models\User', 'id');
    }




}
