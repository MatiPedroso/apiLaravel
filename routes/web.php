<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\EpisodeController;

// home
Route::view('/', 'index')->name('home.index');

// Characters
Route::get('/characters', [CharacterController::class, 'getCaracter'])->name('characters.all');
Route::get('/characters/{id}', [CharacterController::class, 'getCaracterById'])->name('character.show');
Route::get('/filterCharacter', [CharacterController::class, 'filterCharacters'])->name('characters.filter');

//Episodes
Route::get('/episodes', [EpisodeController::class, 'getAllEpisodes'])->name('episodes.all');
Route::get('/episodes/{id}', [EpisodeController::class,'getEpisodeById'])->name('episode.show');
Route::get('/filterEpisode', [EpisodeController::class,'filterEpisode'])->name('episodes.filter');

// Ruta para exportar a Excel
Route::get('/downloadFile', [CharacterController::class, 'downloadExcel'])->name ('download.excel');
