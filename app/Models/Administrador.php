<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;
    protected $table = 'administradores';
    protected $fillable = [
        'id',
    ];

    //Relacion de Administrador -> Usuario 1:N
    public function usuarios(){
        return $this -> hasMany('App\Models\User', 'id');
    }

    //Relacion de Herencia (Reversa)

    public function users(){
        return $this -> belongsTo('App\Models\User', 'id');
    }
}


