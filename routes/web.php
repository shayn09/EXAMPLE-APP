<?php

use Illuminate\Support\Facades\Route;

// Ruta para la landing page
Route::get('/', function () {
    return view('landing'); // Carga la vista landing.blade.php
});

// Ruta para el inicio de sesión
Route::get('/login', function () {
    return view('auth.login'); // Carga la vista auth.login.blade.php
})->name('login');
