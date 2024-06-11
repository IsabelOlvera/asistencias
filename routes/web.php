<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get(
    //url de la ruta
    '/usuarios/todos',
    //controlador y método
    [UserController::class, 'ver']
);

Route::get('/hola', function(){
    return 'Hola Mundo';
});

Route::get('/hola/{nombre}', function($nombre){
    return 'Hola ' . $nombre;
});
