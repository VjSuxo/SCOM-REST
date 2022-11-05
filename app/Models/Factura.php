<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Factura extends Model
{
    use HasFactory;
    protected $table = 'facturas';
    protected $fillable = [
        'id',
        'hora',
        'fecha',
        'cliente_id',
        'camarero_id',
    ];

    //Relacion Factura Comanda 1:N
    public function comandas(){
        return $this -> hasMany('App\Models\Comanda', 'id');
    }

    // Relacion de cajero a factura (Reversa)
    public function cajeros(){
        return $this -> belongsTo('App\Models\Cajero', 'id');
    }

    //Relacion Cliente Factura (Reversa)
    public function clientes(){
        return $this -> belongsTo('App\Models\Cliente', 'id');
    }

}
