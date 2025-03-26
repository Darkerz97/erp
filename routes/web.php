<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\component_controller;
use App\Http\Controllers\DevRegController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/diagnosis', function () {
    return view('diagnosis');
})->middleware('auth');

Route::get('/components_view', function () {
    return view('components_view');
})->middleware('auth');

Route::get('/index', function () {
    return view('/components/index');
})->middleware('auth');


Route::get('/storage', function () {
    return view('/storage/index');
})->middleware('auth');




//rutas para la creacion  de registros en los componentes
Route::get('/components/create', [component_controller::class, 'create']);
Route::post('/components', [component_controller::class, 'store']);



Route::get('/components', [component_controller::class, 'index'])->name('components.index');


//rutas para el registro de equipos 
Route::get('/repairs_reg', [DevRegController::class, 'index'])->name('repairs_reg.index');
Route::get('/repairs_reg/create', [DevRegController::class,'create'])->name('repairs_reg.create');
Route::post('/repairs_reg/save', [DevRegController::class,'save'])->name('repairs_reg.save');


//ruta para peticiones ajax en equipos
Route::get('/obtener-datos-equipo/{id}', [DevRegController::class, 'obtenerDatosEquipo']);