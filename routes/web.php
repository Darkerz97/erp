<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\component_controller;
use App\Http\Controllers\dev_reg_controller;

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


Route::get('/repairs_reg', function () {
    return view('/storage/repairs_reg_view');
})->middleware('auth');


//rutas para la creacion  de registros en los componentes
Route::get('/components/create', [component_controller::class, 'create']);
Route::post('/components', [component_controller::class, 'store']);



Route::get('/components', [component_controller::class, 'index'])->name('components.index');

//rutas para el registro de equipos 
Route::get('/repairs_reg/create', [dev_reg_controller::class,'create'])->name('dev_reg_controller.create');
Route::post('/repairs_reg', [dev_reg_controller::class,'save'])->name('dev_reg_controller.save');