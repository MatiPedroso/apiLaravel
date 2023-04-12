<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\caracterController;

Route::get('/caracter', function () {
    return view('caracter');
});
// Ruta con metodo get trae todos los personajes
Route::get('/caracters', [caracterController::class, 'getCaracter']);

//Busca personaje por id
Route::get('/caracter/{id}', [caracterController::class, 'getCaracterById']);


