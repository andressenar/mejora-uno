<?php

use App\Http\Controllers\JugadorController;
use App\Http\Controllers\PresidenteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/presidente',[PresidenteController::class,'create']);
Route::get('presidente/menu',[PresidenteController::class,'index'])->name('presidente.index');
Route::post('/presidente', [PresidenteController::class,'store'])->name('presidente.store');


Route::get('/presidente/{presidente}',[PresidenteController::class,'show'])->name('presidente.show');
Route::delete('/presidente/{presidente}',[PresidenteController::class,'destroy'])->name('presidente.destroy');
Route::put('/presidente/{presidente}',[PresidenteController::class,'update'])->name('presidente.update');
Route::get('/presidente/{presidente}/editar',[PresidenteController::class,'edit'])->name('presidente.edit');


Route::get('/jugador',[JugadorController::class,'create']);
Route::get('jugador/menu',[JugadorController::class,'index'])->name('jugador.index');
Route::post('/jugador', [JugadorController::class,'store'])->name('jugador.store');


Route::get('/jugador/{jugador}',[JugadorController::class,'show'])->name('jugador.show');
Route::delete('/jugador/{jugador}',[JugadorController::class,'destroy'])->name('jugador.destroy');
Route::put('/jugador/{jugador}',[JugadorController::class,'update'])->name('jugador.update');
Route::get('/jugador/{jugador}/editar',[JugadorController::class,'edit'])->name('jugador.edit');