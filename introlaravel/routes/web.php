<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;


Route::resource('clientes', clienteController::class);

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

Route::get('/',[ControladorVistas::class,'home'])->name('rutainicio');

Route::get('/cliente/create',[clienteController::class,'create'])->name('rutaForm');


//Route::view('/consultar', 'clientes')->name('rutaclientes');//

Route::get('/clientes', [clienteController::class,'index'])->name('rutaCliente');
Route::post('/clientes', [clienteController::class,"store"])->name('rutaEnviar');


Route::get('/clientes/{id}/edit', [clienteController::class, 'edit'])->name('clientes.edit');
Route::post('/clientes/{id}/edit', [clienteController::class, 'update'])->name('clientes.update');

Route::post('/clientes/eliminacion/{id}', [clienteController::class, 'destroy'])->name('clientes.destroy');












Route::get('/cliente/{id}/edit', [clienteController::class, 'edit'])->name('rutaEdit');