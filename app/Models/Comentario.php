<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = 'comentarios';
    protected $fillable = [
        'id',
        'texto',
        'cliente_id',
    ];

    //Relacion Cliente Comentario (Reversa)
    public function clientes(){
        return $this -> belongsTo('App\Models\Cliente', 'id');
    }

}
