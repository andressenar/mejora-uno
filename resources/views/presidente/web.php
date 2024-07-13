<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ViajeroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/viajero',[ViajeroController::class,'create']);
Route::get('viajero/menu',[ViajeroController::class,'index'])->name('viajero.index');
Route::post('/viajero', [ViajeroController::class,'store'])->name('viajero.store');


Route::get('/viajero/{viajero}',[ViajeroController::class,'show'])->name('viajero.show');
Route::delete('/viajero/{viajero}',[ViajeroController::class,'destroy'])->name('viajero.destroy');
Route::put('/viajero/{viajero}',[ViajeroController::class,'update'])->name('viajero.update');
Route::get('/viajero/{viajero}/editar',[ViajeroController::class,'edit'])->name('viajero.edit');


Route::get('/destino',[DestinoController::class,'create']);
Route::get('destino/menu',[DestinoController::class,'index'])->name('destino.index');
Route::post('/destino', [DestinoController::class,'store'])->name('destino.store');


Route::get('/destino/{destino}',[DestinoController::class,'show'])->name('destino.show');
Route::delete('/destino/{destino}',[DestinoController::class,'destroy'])->name('destino.destroy');
Route::put('/destino/{destino}',[DestinoController::class,'update'])->name('destino.update');
Route::get('/destino/{destino}/editar',[DestinoController::class,'edit'])->name('destino.edit');
