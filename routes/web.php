<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::middleware('guest')->group(function (){
    Route::get('/login', function(){
        return Inertia::render('Auth/Login');
    })->name('loginForm');
    Route::get('/register', function(){
        return Inertia::render('Auth/Register');
    })->name('registerForm');
});

// Routes pour l'administrateur
Route::middleware(['role:admin'])->group(function (){
    // Routes pour l'adminstrateur ici
});

// Routes pour l'agriculteur
Route::middleware(['role:farmer'])->group(function (){
    // Routes ici
});

// Route pour l'acheteur
Route::middleware(['role:buyer'])->group(function(){
    // Routes ici
});
