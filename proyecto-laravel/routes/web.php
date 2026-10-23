<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/caracteristicas', function () {
    return view('caracteristicas');
});

Route::get('/modulos', function () {
    return view('modulos');
});

Route::get('/reportes', function () {
    return view('reportes');
});

Route::get('/contacto', function () {
    return view('contacto');
});
