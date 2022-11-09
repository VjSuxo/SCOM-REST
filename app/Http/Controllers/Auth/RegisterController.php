<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use App\Http\Controllers\Login;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Camarero;
use App\Models\Cajero;
use App\Models\Chef;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   //// protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  //  public function __construct()
  //  {
  //      $this->middleware('guest');
   // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
       $user = User::create([
            'id' => $data['ci'],
            'name' => $data['name'],
            'ap_paterno'  => $data['paterno'],
            'ap_materno'  => $data['materno'],
            'email' => $data['email'],
            'rol' => $data['rol'],
            'user' => $data['user'],
            'password' => Hash::make($data['password']),
        ]);

        if($data['rol'] == 0){
            Cliente::create([
                'id' => $data['ci'],
            ]);
        }
        if($data['rol'] == 1){
            Camarero::create([
                'id' => $data['ci'],
                'fecha_ingreso' => '2022-10-30',
            ]);
        }
        if($data['rol'] == 3){
            Cajero::create([
                'id' => $data['ci'],
            ]);
        }
        if($data['rol'] == 4){
            Chef::create([
                'id' => $data['ci'],
                'anios_exp' => 0,
            ]);
        }
        return $user;
    }


}
