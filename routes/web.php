<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\component_controller;

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

//rutas para la creacion de  de registros en los componentes
Route::get('/components/create', [component_controller::class, 'create']);
Route::post('/components', [component_controller::class, 'store']);



Route::get('/components', [component_controller::class, 'index']);