<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

//Route::get('/welcome', function () {
//    return view('welcome');
//})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/difunto', function () {
    return view('difunto');
})->name('difunto');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/osario', function () {
    return view('osario');
})->name('osario');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/boveda', function () {
    return view('boveda');
})->name('boveda');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/usuarios', function () {
    return view('usuario');
})->name('usuario');
