<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/admin', function () {
    return view('admin');
});

Route::get('/producto', function () {
    return view('producto');
});

Route::get('/categorias', function () {
    return view('categorias');
});

Route::get('/imagenes', function () {
    return view('imagenes');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/loginUsuario', function () {
    return view('loginUsuario');
});

Route::get('/registrar', function () {
    return view('registrar');
});


