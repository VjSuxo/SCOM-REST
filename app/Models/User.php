<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'ap_paterno',
        'ap_materno',
        'email',
        'rol',
        'user',
        'password',
        'administrador_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function role(): Attribute {
        return new Attribute(
            get: fn($value) => ["user","editor","admin"][$value],
        );
    }


    // Relacion de administrador a usuario (Reversa)
    public function administradores(){
        return $this -> belongsTo('App\Models\Administrador', 'id');
    }

    //Relacion de Herencia Usuario -> Cliente, Administrador, Cajaero, Chef, Camarero
    public function admins(){
        return $this -> hasOne('App\Models\Administrador', 'id');
    }

    public function clientes(){
        return $this -> hasOne('App\Models\Cliente', 'id');
    }

    public function cajeros(){
        return $this -> hasOne('App\Models\Cajero', 'id');
    }

    public function camareros(){
        return $this -> hasOne('App\Models\Camarero', 'id');
    }

    public function chefs(){
        return $this -> hasOne('App\Models\Chef', 'id');
    }

}
