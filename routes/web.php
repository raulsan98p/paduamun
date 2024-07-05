<?php

use Illuminate\Support\Facades\Route;

//Controladores creados para cada vista de la página
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactoController;

// Ruta index principal as admin 
Route::get('/', [AdminController::class, 'index'])->name('admin');


//Rutas contacto y envío de email
Route::get('/contact', [ContactoController::class , 'index'])->name('contact_index');
Route::post('/send_email', [ContactoController::class , 'send_email'])->name('send_email');
