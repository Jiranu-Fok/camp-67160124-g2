<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\PokedexController;
Route::get('/', function () {
    return view('html101');
});
Route::get('/workshop', [WorkshopController::class, 'index']);
Route::post('/workshop', [WorkshopController::class, 'store']);
Route::get('/pokedex', [PokedexController::class, 'index']);
Route::get('/pokedex/create', [PokedexController::class, 'create']);
Route::post('/pokedex', [PokedexController::class, 'store']);
Route::get('/pokedex/{id}/edit', [PokedexController::class, 'edit']);
Route::put('/pokedex/{id}', [PokedexController::class, 'update']);
Route::delete('/pokedex/{id}', [PokedexController::class, 'destroy']);
