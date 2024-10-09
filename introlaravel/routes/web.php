<?php

//use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('inicio');//
//})->name('rutainicio');//

//Route::get('/form', function () {
    //return view('Formulario');//
//})->name('rutaform');//

//Route::get('/consultar', function () {//
    //return view('clientes');
//})->name('rutaclientes');//

Route::view('/', 'inicio')->name('rutainicio');
Route::view('/form', 'Formulario')->name('rutaForm');
Route::view('/consultar', 'clientes')->name('rutaclientes');
Route::view('/component','componentes')->name('rutaComponent');