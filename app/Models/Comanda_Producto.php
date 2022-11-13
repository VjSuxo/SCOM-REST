<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda_Producto extends Model
{
    use HasFactory;
    protected $table = 'comanda_producto';
    protected $fillable = [
        'id',
        'cant_pedido',
        'comanda_id',
        'producto_id',
    ];

    //Relacion Comanda Producto
   // public function comanda(){
  //      return $this -> belongsToMany('App\Models\Comanda', 'id');
 //   }

}
