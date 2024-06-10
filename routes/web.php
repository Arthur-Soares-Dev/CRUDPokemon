<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;

Route::get('/', [PokemonsController::class, 'index'])->name('pokemons.index');
Route::get('/create', [PokemonsController::class, 'create']);
Route::post('/store', [PokemonsController::class, 'store']);
Route::delete('/delete', [PokemonsController::class, 'delete']);
Route::get('/edit/{id}', [PokemonsController::class, 'edit']);
Route::put('/update', [PokemonsController::class, 'update']);
