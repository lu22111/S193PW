<?php

use App\Http\Controllers\ContradorVistas;
use Illuminate\Support\Facades\Route;


Route::get('/',[ContradorVistas::class,'inicio'])->name('rutainicio');

Route::get('/Repaso',[ContradorVistas::class,'repaso'])->name('rutaRepaso1');

