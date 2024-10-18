<?php

use App\Http\Controllers\ContradorVistas;
use Illuminate\Support\Facades\Route;


Route::get('/',[ContradorVistas::class,'inicio'])->name('rutainicio');

Route::get('/Repaso',[ContradorVistas::class,'repaso'])->name('rutaRepaso1');

Route::post('/1',[ContradorVistas::class,'calculadora'])->name('ruta1');


Route::post('/2',[ContradorVistas::class,'calculadora1'])->name('ruta2');




Route::post('/3',[ContradorVistas::class,'calculadora2'])->name('ruta3');


Route::post('/4',[ContradorVistas::class,'calculadora3'])->name('ruta4');


