<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [ControladorVistas::class,'registro'])->name('registro');
Route::post('/guardar', [ControladorVistas::class,'guardar'])->name('guardar');
Route::post('/editar', [ControladorVistas::class,'editar'])->name('editar');
Route::post('/borrar', [ControladorVistas::class,'eliminar'])->name('borrar');