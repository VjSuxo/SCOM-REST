<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camarero extends Model
{
    use HasFactory;
    protected $table = 'camareros';
    protected $fillable = [
        'id',
        'fecha_ingreso',
    ];

    //Relacion Camarero -> Mesa 1:N
    public function mesas(){
        return $this -> hasMany('App\Models\Mesa', ',mesa_id');
    }

    //Relacion de Herencia (Reversa)

    public function users(){
        return $this -> belongsTo('App\Models\User', 'id');
    }
}
