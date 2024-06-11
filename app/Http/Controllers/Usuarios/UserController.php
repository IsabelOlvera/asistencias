<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ver(){
        for ($i=0; $i <= 10; $i++){
            $usuarios[] = [
                'nombre'=> 'Usuario '. $i,
                'email' => 'usuario' . $i . '@gmail.com'
            ];
        }
        dd($usuarios);
        return view('usuarios.vista', compact('usuarios'));
    }
}
