<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
Route::get('/', [ControladorVistas::class,'principal'])->name('rutaprincipal');
Route::get('/1', [ControladorVistas::class,'Registro'])->name('rutaregistro');
Route::post('/Guardarlibro', [ControladorVistas::class,'Guardarlibro'])->name('rutaGuardarlibro');

