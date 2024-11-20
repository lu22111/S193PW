<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;
//Route::get('/', function () {
    //return view('inicio');//
//})->name('rutainicio');//

//Route::get('/form', function () {
    //return view('Formulario');//
//})->name('rutaform');//

//Route::get('/consultar', function () {//
    //return view('clientes');
//})->name('rutaclientes');//

// Route::view('/', 'inicio')->name('rutainicio');

// Route::view('/consultar', 'clientes')->name('rutaclientes');
 Route::view('/component','componentes')->name('rutaComponent');

Route::get('/',[ControladorVistas::class,'home'])->name('rutainicio');

//Route::get('/form',[ControladorVistas::class,'formulario'])->name('rutaForm');//

Route::get('/consultar',[ControladorVistas::class,'consulta'])->name('rutaclientes');

Route::post('/enviarCliente',[ControladorVistas::class,'procesadorCliente'])->name('rutaProcesar');


Route::view('/consultar', 'clientes')->name('rutaclientes');
Route::get('/cliente/create',[clienteController::class,'create'])->name('rutaForm');
Route::resource('clientes', clienteController::class);


Route::get('/cliente/{id}/edit', [clienteController::class, 'edit'])->name('rutaEdit');